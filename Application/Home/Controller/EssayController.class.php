<?php
namespace Home\Controller;
class EssayController extends CommonController {

    //商品主页
    public function index(){
        //获取参数
        $p = I('get.p/d',0);     //当前页码
        $cid = I('get.cid/d',-1); //分类ID
        //实例化模型
        $Essay = D('Essay');
        $Categoryessay = D('Categoryessay');
        //如果分类ID大于0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categoryessay->getSubIds($cid) : $cid;
        //获取博客列表
        $data['essay'] = $Essay->postList($cids,$p);
        $data['recommend'] = $Essay->getHot();
        //防止空页被访问
        if(empty($data['essay']['data']) && $p > 0){
            $this->redirect('Essay/index',array('cid'=>$cid));
        }

        //查询分类列表
        $data['categoryessay'] = $Categoryessay->getFamily($cid);
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign('title','博客列表');
        $this->assign($data);
        $this->display();
    }

    //博客详情页
    public function Essay() {
        $id = I('get.id/d',0); //博客ID
        $Essay = D('Essay');
        $Categoryessay = D('Categoryessay');
        //更新流量量
        $Essay->where(array('id'=>$id))->setInc('click',1);
        //查找当前博客
        $data['essay'] = $Essay->getGoods(array('recycle' => 'no','on_sale'=>'yes','id'=>$id));
        if(empty($data['essay'])){
            $this->error('您访问的博客不存在！');
        }
        //查找推荐博客
        $cids = $Categoryessay->getSubIds($data['essay']['category_id']);
        $where = array('recycle' => 'no','on_sale'=>'yes');
        $where['category_id'] = array('in',$cids);
        $data['recommend'] = $Essay->getRecommend($where);
        $data['latest'] = $Essay->getLatest();

        //上一篇
        $data['prev'] = $Essay->where("id<'".$id."'")->order('id desc')->limit('1')->find();

        //下一篇
        $data['next'] = $Essay->where("id>'".$id."'")->order('id asc')->limit('1')->find();

        //查找分类导航
        $data['path'] = $Categoryessay->getPath($data['essay']['category_id']);
        $this->assign('title',$data['essay']['name'].' - MIUu博客');
        $this->assign($data);
        $this->display();
    }


}
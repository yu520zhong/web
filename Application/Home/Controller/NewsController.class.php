<?php
namespace Home\Controller;
class NewsController extends CommonController {

    //商品主页
    public function index(){
        //获取参数
        $p = I('get.p/d',0);     //当前页码
        $cid = I('get.cid/d',-1); //分类ID
        //实例化模型
        $News = D('News');
        $Categorynews = D('Categorynews');
        //如果分类ID大于0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categorynews->getSubIds($cid) : $cid;
        //获取段子列表
        $data['news'] = $News->postList($cids,$p);
        $data['latest'] = $News->getLatest();
        //防止空页被访问
        if(empty($data['news']['data']) && $p > 0){
            $this->redirect('News/index',array('cid'=>$cid));
        }

        //查询分类列表
        $data['categorynews'] = $Categorynews->getFamily($cid);
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign('title','段子列表');
        $this->assign($data);
        $this->display();
    }


    public function news() {
        $id = I('get.id/d',0); //文章ID
        $News = D('news');
        $Categorynews = D('Categorynews');
        //更新流量量
        $News->where(array('id'=>$id))->setInc('click',1);
        //查找当前文章
        $data['news'] = $News->getDate(array('id'=>$id));
        if(empty($data['news'])){
            $this->error('您访问的资讯不存在，已下架或删除！');
        }
        //查找推荐资讯
        $cids = $Categorynews->getSubIds($data['news']['category_id']);
        $where = array('recycle' => 'no','on_sale'=>'yes');
        $where['category_id'] = array('in',$cids);
        $data['recommend'] = $News->getLink($where);
        $data['latest'] = $News->getLatest();

        //上一篇
        $data['prev'] = $News->where("id<'".$id."'")->order('id desc')->limit('1')->find();

        //下一篇
        $data['next'] = $News->where("id>'".$id."'")->order('id asc')->limit('1')->find();

        //查找分类导航
        $data['path'] = $Categorynews->getPath($data['news']['category_id']);
        $this->assign('title',$data['news']['name'].' - MIUu博客');
        $this->assign($data);
        $this->display();
    }

}





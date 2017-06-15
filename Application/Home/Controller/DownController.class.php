<?php
namespace Home\Controller;
class DownController extends CommonController {


    // 技术文摘博客
    public function index(){
        $p = I('get.p/d',0);
        $cid = I('get.cid/d',-1);
        //实例化模型
        $Down = D('Down');
        $Categorydown = D('Categorydown');
        //如果分类ID>0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categorydown->getSubIds($cid) : $cid;
        //获取资源列表
        $data['down'] = $Down->postList($cids,$p);  //获取文摘列表
        $data['recommend'] = $Down->getRecommend();
        //防止空页被访问
        if(empty($data['down']['data']) && $p>0) {
            $this->redirect('Blog/bloglist',array('cid'=>$cid));
        }
        //查询分类列表
        $data['categorydown'] = $Categorydown->getFamily($cid); //查询分类列表
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign($data);
        $this->display();
    }

    public function down() {
        $id = I('get.id/d',0); //资源ID
        $Down = D('down');
        $Categorydown = D('Categorydown');
        //更新流量量
        $Down->where(array('id'=>$id))->setInc('click',1);
        //查找当前资源
        $data['down'] = $Down->getGoods(array('id'=>$id));
        if(empty($data['down'])){
            $this->error('您访问的资源不存在，已下架或删除！');
        }

        //查找推荐资源
        $cids = $Categorydown->getSubIds($data['down']['category_id']);
        $where = array('recycle' => 'no','on_sale'=>'yes');
        $where['category_id'] = array('in',$cids);
        $data['recommend'] = $Down->getRecommend();
        $data['latest'] = $Down->getLatest();

        //上一篇
        $data['prev'] = $Down->where("id<'".$id."'")->order('id desc')->limit('1')->find();

        //下一篇
        $data['next'] = $Down->where("id>'".$id."'")->order('id asc')->limit('1')->find();

        $data['keywords'] = explode(",",$data['down']['keywords']);

        //查找分类导航
        $data['path'] = $Categorydown->getPath($data['down']['category_id']);
        $this->assign('title',$data['down']['name'].' - MIUu博客');
        $this->assign($data);
        $this->display();
    }

    //发布博客
    public function publish() {
        if (IS_AJAX) {
            $Topic = D('Topic');
            $data = $Topic->publish(I('post.content'), session('userinfo.id'), I('post.images'));
			if($data != false){
				$this->ajaxReturn(array('status' => 200,'text' => $data),'JSON');
			}
		} else {
           $this->ajaxReturn(array('status' => 404,'text' => 'no faild'),'JSON');
        }
    }

    public function bloglist(){
        $p = I('get.p/d',0);
        $cid = I('get.cid/d',-1);
        $Down = D('Down');
        $Categorydown = D('Categorydown');
        //如果分类ID>0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categorydown->getSubIds($cid) : $cid;
        $data['down'] =$Down->getList($cids,$p);  //获取商品列表
        //防止空页被访问
        if(empty($data['down']['data']) && $p>0) {
            $this->redirect('Blog/bloglist',array('cid'=>$cid));
        }
        $data['categorydown'] = $Categorydown->getFamily($cid); //查询分类列表
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign($data);
        $this->display();
    }


}





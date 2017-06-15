<?php
namespace Home\Controller;
class BlogController extends CommonController {


    // 技术文摘博客
    public function index(){
        $p = I('get.p/d',0);
        $cid = I('get.cid/d',-1);
        //实例化模型
        $Articles = D('Articles');
        $Categoryart = D('Categoryart');
        //如果分类ID>0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categoryart->getSubIds($cid) : $cid;
        //获取文章列表
        $data['articles'] = $Articles->postList($cids,$p);  //获取文摘列表
        $data['recommend'] = $Articles->getRecommend();
        //防止空页被访问
        if(empty($data['articles']['data']) && $p>0) {
            $this->redirect('Blog/bloglist',array('cid'=>$cid));
        }
        //查询分类列表
        $data['categoryart'] = $Categoryart->getFamily($cid); //查询分类列表
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign($data);
        $this->display();
    }

    public function articles() {
        $id = I('get.id/d',0); //文章ID
        $Articles = D('articles');
        $Categoryart = D('Categoryart');
        //更新流量量
        $Articles->where(array('id'=>$id))->setInc('click',1);
        //查找当前文章
        $data['articles'] = $Articles->getGoods(array('id'=>$id));
        if(empty($data['articles'])){
            $this->error('您访问的文章不存在，已下架或删除！');
        }

        //查找推荐文章
        $cids = $Categoryart->getSubIds($data['articles']['category_id']);
        $where = array('recycle' => 'no','on_sale'=>'yes');
        $where['category_id'] = array('in',$cids);
        $data['recommend'] = $Articles->getRecommend();
        $data['latest'] = $Articles->getLatest();

        //上一篇
        $data['prev'] = $Articles->where("id<'".$id."'")->order('id desc')->limit('1')->find();

        //下一篇
        $data['next'] = $Articles->where("id>'".$id."'")->order('id asc')->limit('1')->find();

        $data['keywords'] = explode(",",$data['articles']['keywords']);

        //查找分类导航
        $data['path'] = $Categoryart->getPath($data['articles']['category_id']);
        $this->assign('title',$data['articles']['name'].' - MIUu博客');
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
        $Articles = D('Articles');
        $Categoryart = D('Categoryart');
        //如果分类ID>0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categoryart->getSubIds($cid) : $cid;
        $data['articles'] =$Articles->getList($cids,$p);  //获取商品列表
        //防止空页被访问
        if(empty($data['articles']['data']) && $p>0) {
            $this->redirect('Blog/bloglist',array('cid'=>$cid));
        }
        $data['categoryart'] = $Categoryart->getFamily($cid); //查询分类列表
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign($data);
        $this->display();
    }


}





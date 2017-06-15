<?php
namespace Home\Controller;
class NavsController extends CommonController {

    //导航主页
    public function index(){
        //获取参数
        $cid = I('get.cid/d',-1); //分类ID
        //实例化模型
        $Navs = D('Navs');
        $Categorynavs = D('Categorynavs');
        //如果分类ID大于0，则取出所有子分类ID
        $cids = ($cid>0) ? $Categorynavs->getSubIds($cid) : $cid;
        //获取博客列表
        $data['news'] = $Navs->postList($cids,$p);
        //防止空页被访问
        if(empty($data['news']['data']) && $p > 0){
            $this->redirect('News/index',array('cid'=>$cid));
        }

        //查询分类列表
        $data['categorynavs'] = $Categorynavs->getFamily($cid);
        $data['cid'] = $cid;
        $data['p'] = $p;
        $this->assign('title','博客列表');
        $this->assign($data);
        $this->display();
    }

}





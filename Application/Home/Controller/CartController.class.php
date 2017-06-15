<?php
namespace Home\Controller;
class CartController extends CommonController {
	public function __construct() {
		parent::__construct();
		if($this->userinfo === false){
			$this->error('请先登录。',U('User/login'));
		}
		$this->assign('title','购物车 - 传智商城');
	}
	//购物车列表
	public function index(){
		$data['cart'] = D('Shopcart')->getList($this->userinfo['id']);
		$this->assign($data);
		$this->display();
	}
	//添加到购物车
	public function add(){
		$id = I('get.id/d',0);
		$num = I('get.num/d',0);
		$rst = D('Shopcart')->addCart($id,$this->userinfo['id'],$num);
		if($rst===false){
			$this->error('添加购物车失败');
		}
		$this->success('添加购物车成功');
	}
	//从购物车删除
	public function del(){
		$id=I('get.id/d',0);
		$where = array('id'=>$id,'user_id'=>$this->userinfo['id']);
		if(false===M('Shopcart')->where($where)->delete()){
			$this->error('删除失败');	
		}
		$this->redirect('Cart/index');
	}
}
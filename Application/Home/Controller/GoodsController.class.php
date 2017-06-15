<?php
namespace Home\Controller;
class GoodsController extends CommonController {

	//商品主页
	public function index(){
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		$cid = I('get.cid/d',-1); //分类ID
		//实例化模型
		$Goods = D('Goods');
		$Category = D('Category');
		//如果分类ID大于0，则取出所有子分类ID
		$cids = ($cid>0) ? $Category->getSubIds($cid) : $cid;
		//获取商品列表
		$data['goods'] = $Goods->getList($cids,$p);
		//防止空页被访问
		if(empty($data['goods']['data']) && $p > 0){
			$this->redirect('Goods/index',array('cid'=>$cid));
		}
		//查询分类列表
		$data['category'] = $Category->getFamily($cid);
		$data['cid'] = $cid;
		$data['p'] = $p;
		$this->assign('title','商品列表 - 传智商城');
		$this->assign($data);
		$this->display();
	}

	//商品详情页
	public function good() {
		$id = I('get.id/d',0); //商品ID
		$Goods = D('Goods');
		$Category = D('Category');
		//查找当前商品
		$data['goods'] = $Goods->getGoods(array('recycle' => 'no','on_sale'=>'yes','id'=>$id));
		if(empty($data['goods'])){
			$this->error('您访问的商品不存在，已下架或删除！');
		}
		//查找推荐商品
		$cids = $Category->getSubIds($data['goods']['category_id']);
		$where = array('recycle' => 'no','on_sale'=>'yes');
		$where['category_id'] = array('in',$cids);
		$data['recommend'] = $Goods->getRecommend($where);
		//查找分类导航
		$data['path'] = $Category->getPath($data['goods']['category_id']);
		$this->assign('title',$data['goods']['name'].' - 传智商城');
		$this->assign($data);
		$this->display();
	}


}
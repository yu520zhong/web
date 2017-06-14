<?php
namespace Home\Controller;
class NotesController extends CommonController {

	//商品主页
	public function index(){
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		$cid = I('get.cid/d',-1); //分类ID
		//实例化模型
		$Notes = D('Notes');
		$Categorynote = D('Categorynote');
		//如果分类ID大于0，则取出所有子分类ID
		$cids = ($cid>0) ? $Categorynote->getSubIds($cid) : $cid;
		//获取博客列表
		$data['notes'] = $Notes->postList($cids,$p);
		$data['recommend'] = $Notes->getHot();
		//防止空页被访问
		if(empty($data['notes']['data']) && $p > 0){
			$this->redirect('Notes/index',array('cid'=>$cid));
		}


		//查询分类列表
		$data['categorynote'] = $Categorynote->getFamily($cid);
		$data['cid'] = $cid;
		$data['p'] = $p;
		$this->assign('title','博客列表');
		$this->assign($data);
		$this->display();
	}

	//博客详情页
	public function notes() {
		$id = I('get.id/d',0); //博客ID
		$Notes = D('Notes');
		$Categorynote = D('Categorynote');
		//更新流量量
    	$Notes->where(array('id'=>$id))->setInc('click',1);
		//查找当前博客
		$data['notes'] = $Notes->getGoods(array('recycle' => 'no','on_sale'=>'yes','id'=>$id));
		if(empty($data['notes'])){
			$this->error('您访问的博客不存在！');
		}
		//查找推荐博客
		$cids = $Categorynote->getSubIds($data['notes']['category_id']);
		$where = array('recycle' => 'no','on_sale'=>'yes');
		$where['category_id'] = array('in',$cids);
		$data['recommend'] = $Notes->getRecommend($where);
		$data['latest'] = $Notes->getLatest();

		//上一篇
	    $data['prev'] = $Notes->where("id<'".$id."'")->order('id desc')->limit('1')->find();

	    //下一篇
	    $data['next'] = $Notes->where("id>'".$id."'")->order('id asc')->limit('1')->find();

		//查找分类导航
		$data['path'] = $Categorynote->getPath($data['notes']['category_id']);
		$this->assign('title',$data['notes']['name'].' - MIUu博客');
		$this->assign($data);
		$this->display();
	}


}
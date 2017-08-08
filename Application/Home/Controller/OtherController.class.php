<?php
namespace Home\Controller;
class OtherController extends CommonController {
/*	public function search() {
		$this->display();
	}

	public function order() {
		$keyword = trim(I('get.keyword'));
		dump($keyword);
		$Articles = D('Articles');
		if (!empty($keyword)) {
			//判断之后，获取搜索结果
			$data = $Articles->postSearch($keyword);
		}
		return $this->ajaxReturn($data,'JSON');
	}
*/
	public function search() {
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		//实例化模型
		$Articles = D('Articles');
		$keyword = $_GET['keywords'];
		//获取搜索结果
		$data['keyword'] = $keyword;
		$data['articles'] = $Articles->getSearch($p,$keyword);
		/*if (!empty($keyword)) {
			//判断之后，获取搜索结果
			$data['articles'] = $Articles->getSearch($p,$keyword);
		}*/
		//防止空页被访问
		if(empty($data['articles']['data']) && $p > 0){
			$this->redirect('Other/search');
		}
		//查询分类列表
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	public function webseo() {
		$this->display();
	}

/*	public function orders() {
		$keyword = trim(I('get.keyword'));
		$Articles = D('Articles');
		dump($keyword);
		if (!empty($keyword)) {
		    $data = $Articles->postSearch($keyword);
		}
		dump($data);
		$this->ajaxReturn($data,'JSON');
	}*/

	public function orders(){
		$keyword = trim(I('get.keyword'));
		if (!empty($keyword)) {
		    $map['name|content|id'] = array('like','%'.$keyword.'%');
		}
		$field = 'id,name,thumb,add_time,desc,keywords,click,links';
		//查询文章数据
		$list1 = M ('Notes')->field($field)->where($map)->select();
		$list2 = M ('Essay')->field($field)->where($map)->select();
		$list3 = M ('Articles')->field($field)->where($map)->select();
		$lists = array_merge($list1,$list2,$list3);
		$this->ajaxReturn($lists,'JSON');

		/*$this->assign("lists", $lists);
		$this->display();*/

	}

	public function webstate() {
		$this->display();
	}

	/*public function orders() {
		$keyword = trim(I('get.keyword'));
		$Articles = D('Articles');
		dump($keyword);
		if (!empty($keyword)) {
		    $data = $Articles->postSearch($keyword);
		}

		$this->assign("lists", $data);
		$this->assign("keyword", $keyword);
		$this->display();
	}*/


/*		public function search() {
		//获取参数
		$p = I('get.p/d',0);     //当前页码
		//实例化模型
		$Articles = D('Articles');
		$keyword = $_GET['keywords'];
		//获取搜索结果
		$data['articles'] = $Articles->getSearch($p,$keyword);
		if (!empty($keyword)) {
			//判断之后，获取搜索结果
			$data['articles'] = $Articles->getSearch($p,$keyword);
		}
		//防止空页被访问
		if(empty($data['articles']['data']) && $p > 0){
			$this->redirect('Other/search');
		}
		//查询分类列表
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}*/
}

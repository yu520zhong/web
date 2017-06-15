<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model {

	/**
	 * 文章列表
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */

	public function getList($cids=0,$p=0) {
		$field = 'category_id,id,name,add_time,content,click';
		//查找分类ID数据
		if($cids > 0) {
			$where['category_id'] = array('in',$cids);
		}
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//处理排序条件
		$order = 'id desc';
		$input_order = I('get.order');
		if(isset($allow_order[$input_order])) $order = $allow_order[$input_order];
		//准备分页查询
		$pagesize = C('LIST_CONFIG.pagesize'); //每页显示文章数
		$count = $this->where($where)->count();
		$Page = new \Think\Page($count,$pagesize);
		$this->_customPage($Page);
		//查询文章数据
		$data = $this->field($field)->where($where)->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,
			'pagelist' => $Page->show(),
		);
	}

	//双表联查获取对应分类及文章
	public function postList($cids=0,$p=0) {
		$field = 'c.name as categorynews_name,a.category_id,a.id,a.name,a.sn,a.add_time,a.content,a.click';
		//查找分类ID数据
		if($cids > 0) {
			$where['a.category_id'] = array('in',$cids);
		}

		//处理排序条件
		$order = 'a.id desc';
		$input_order = I('get.order');
		if(isset($allow_order[$input_order])) $order = $allow_order[$input_order];

		//准备分页查询
		$pagesize = C('LIST_CONFIG.pagesize'); //每页显示文章数
		$count = $this->alias('a')->where($where)->count();
		$Page = new \Think\Page($count,$pagesize);
		$this->_customPage($Page);
		//查询文章数据
		$data = $this->alias('a')->join('__CATEGORYNEWS__ AS c ON c.id=a.category_id','LEFT')->field($field)->where($where)
		->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,
			'pagelist' => $Page->show(),
		);
	}

	public function showList($cids=0,$p=0){
		//准备查询条件
		$order = 'a.id desc';
		$field = 'c.name as categorynews_name,a.category_id,a.id,a.name,a.sn,a.add_time,a.content,a.click';
		// $where = "category_id IN(1,2,3)";
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');        //每页显示文章数
		$count = $this->alias('a')->where($where)->count();       //获取符合条件的文章总数
		$Page = new \Think\Page($count,$pagesize);    //实例化分页类
		$this->_customPage($Page);                    //定制分页类样式
		//查询文章数据
		$data = $this->alias('a')->join('__CATEGORYNEWS__ AS c ON c.id=a.category_id','LEFT')->field($field)->where($where)
		->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //文章列表数组
			'pagelist' => $Page->show(),  //分页链接HTML
		);
	}
	public function getArticles($p=0){
		//准备查询条件
		$keywords = '%'.$_GET['keywords'].'%'; //获取搜索关键字
		$where['name|content|id'] = array('like',$keywords);  //用like条件搜索title和content两个字段
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');        //每页显示文章数
		$count = $this->where($where)->count();       //获取符合条件的文章总数
		$Page = new \Think\Page($count,$pagesize);    //实例化分页类
		$this->_customPage($Page);                    //定制分页类样式
		//查询文章数据
		$data = $this->field($field)->where($where)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //文章列表数组
			'pagelist' => $Page->show(),  //分页链接HTML
		);
	}
	//定制分页类样式
	private function _customPage($Page){
		$Page->lastSuffix = false;
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme',"<ul class='pagination'></li><li>%FIRST%</li><li>%UP_PAGE%</li><li>%LINK_PAGE%</li><li>%DOWN_PAGE%</li><li>%END%</li><li><a> %HEADER%  %NOW_PAGE%/%TOTAL_PAGE% 页</a></ul>");
	}

	public function getDate($where) {
		$field = 'id,category_id,name,add_time,content,click';
		//处理排序条件
		$order = 'id desc';
		//查询文章数据
		return $this->field($field)->where($where)->order($order)->find();
		//返回结果
	}


	public function getRecommend(){
		//准备查询条件
		$order = 'a.id desc';
		$field = 'c.name as categorynews_name,a.category_id,a.id,a.name,a.sn,a.add_time,a.content,a.click';
		$where = array('recycle' => 'no','on_sale'=>'yes','recommend'=>'yes');
		//查询文章数据
		$data = $this->alias('a')->join('__CATEGORYNEWS__ AS c ON c.id=a.category_id','LEFT')->field($field)->where($where)
		->order($order)->limit(6)->select();
		//返回结果
		return array(
			'data' => $data,              //文章列表数组
		);
	}

	public function getLatest(){
		//准备查询条件
		$order = 'id desc';
		$field = 'id,name,add_time,click';
		$where = array('recycle' => 'no','on_sale'=>'yes');
		//查询文章数据
		$data = $this->field($field)->where($where)
		->order($order)->limit(4)->select();
		//返回结果
		return array(
			'data' => $data,              //最新列表数组
		);
	}

	//取出相关推荐（即同一个分类）
	public function getLink($where){
		//查询被推荐的商品
		$where['recommend'] = 'yes';
		$field = 'id,name,add_time,category_id,click';
		return $this->field($field)->where($where)->limit(8)->select();
	}

}
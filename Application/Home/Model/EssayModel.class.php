<?php
namespace Home\Model;
use Think\Model;
class EssayModel extends Model {

	/**
	 * 美文列表
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */
	public function getList($cids=0,$p=0){
		//准备查询条件
		$field = 'category_id,id,name,desc,thumb,add_time,click,source,author';
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//查找分类ID数组
		if($cids > 0){
			$where['category_id'] = array('in',$cids);
		}

		//准备分页查询
		$pagesize = C('USER_CONFIG.goodsize');        //每页显示美文数
		$count = $this->where($where)->count();       //获取符合条件的美文总数
		$Page = new \Think\Page($count,$pagesize);    //实例化分页类
		$this->_customPage($Page);                    //定制分页类样式
		//查询美文数据
		$data = $this->field($field)->where($where)->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //美文列表数组
			'pagelist' => $Page->show(),  //分页链接HTML
		);

		//处理排序条件
		$order = 'id desc';
		$input_order = I('get.order');
		if(isset($allow_order[$input_order])) $order = $allow_order[$input_order];
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize'); //每页显示文章数
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

	//双表联查获取对应分类及美文
	public function postList($cids=0,$p=0) {
		$field = 'c.name as category_name,a.category_id,a.id,a.name,a.desc,a.thumb,a.add_time,a.content,a.click,a.source,a.author';
		//查找分类ID数据
		if($cids > 0) {
			$where['a.category_id'] = array('in',$cids);
		}

		//处理排序条件
		$order = 'a.id desc';
		$input_order = I('get.order');
		if(isset($allow_order[$input_order])) $order = $allow_order[$input_order];
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');  //每页显示美文数
		$count = $this->alias('a')->where($where)->count();
		$Page = new \Think\Page($count,$pagesize);
		$this->_customPage($Page);
		//查询美文数据
		$data = $this->alias('a')->join('__CATEGORYESSAY__ AS c ON c.id=a.category_id','LEFT')->field($field)->where($where)
		->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,
			'pagelist' => $Page->show(),
		);
	}



	public function showList($cids=0,$p=0){
		//准备查询条件
		$order = 'n.id desc';
		$field = 'c.name as category_name,n.category_id,n.id,n.name,n.desc,n.thumb,n.sn,n.add_time,n.content,n.click,n.source,n.author';
		// $where = "category_id IN(1,2,3)";
		//where条件
		$where = array('recycle' => 'no','on_sale' => 'yes');
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');        //每页显示美文数
		$count = $this->alias('n')->where($where)->count();       //获取符合条件的美文总数
		$Page = new \Think\Page($count,$pagesize);    //实例化分页类
		$this->_customPage($Page);                    //定制分页类样式
		//查询美文数据
		$data = $this->alias('n')->join('__CATEGORYESSAY__ AS c ON c.id=n.category_id','LEFT')->field($field)->where($where)
		->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //美文列表数组
			'pagelist' => $Page->show(),  //分页链接HTML
		);
	}

	//搜索结果页
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
			'data' => $data,              //美文列表数组
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
	//根据$where条件查询美文数据
	public function getGoods($where){
		//定义需要的字段
		$field = 'id,category_id,sn,name,thumb,add_time,desc,content,click,source,author';
		return $this->field($field)->where($where)->find();
	}

	//取出推荐美文
	public function getRecommend($where){
		$order = 'id desc';
		//查询被推荐的美文
		$field = 'id,name,add_time,thumb,click,source,author';
		$where = array('recycle' => 'no','on_sale'=>'yes','recommend'=>'yes');
		return $this->field($field)->order($order)->where($where)->limit(4)->select();
	}

	//取出推荐美文
	public function getHot(){
		$order = 'click,source,author desc';
		//查询被推荐的美文
		$field = 'id,name,add_time,thumb,click,source,author';
		$where = array('recycle' => 'no','on_sale'=>'yes');
		return $this->field($field)->order($order)->where($where)->limit(4)->select();
	}

	public function getLatest(){
		//准备查询条件
		$order = 'id desc';
		$field = 'id,name,thumb,add_time,click,source,author';
		$where = array('recycle' => 'no','on_sale'=>'yes');
		//查询文章数据
		$data = $this->field($field)->where($where)
		->order($order)->limit(4)->select();
		//返回结果
		return array(
			'data' => $data,              //最新列表数组
		);
	}

}
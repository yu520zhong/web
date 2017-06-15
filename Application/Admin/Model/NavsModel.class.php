<?php
namespace Admin\Model;
use Think\Model;
class NavsModel extends Model {
	//表单字段过滤
	protected $insertFields = 'name,desc,recommend,url';
	protected $updateFields = 'name,desc,recommend,url';
	//自动验证
	protected $_validate = array(
		array('name','1,30','导航名称不合法（1-30个字符）',self::MUST_VALIDATE,'length'),
		array('recommend',array('yes','no'),'recommend字段填写错误',self::MUST_VALIDATE,'in'),
		array('desc','1,500','简述长度不合法（1-500个字符）',self::MUST_VALIDATE,'length'),
		array('url','1,255','链接长度不合法（1-255个字符）',self::MUST_VALIDATE,'length'),
	);

	/**
	 * 导航列表
	 * @param string $type 数据用途（商品列表或回收站列表）
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */
	public function getList($type='navs',$cids=0,$p=0){
		//准备查询条件
		$order = 'v.id desc';        //排序条件
		$field = 'c.name as categorynavs_name,v.category_id,v.id,v.name,v.desc,v.recommend,v.add_time,v.url';
		if($type=='navs'){          //博客列表页取数据时
			$where = array('v.recycle' => 'no');
		}elseif($type=='recycle'){   //博客回收站取数据时
			$where = array('v.recycle' => 'yes');
		}
		//cids=0查找未分类博客，cid>0查找分类ID数组博客，cid<0查找全部博客
		if($cids == 0){      //查找未分类的商品
			$where['v.category_id'] = 0;
		}elseif($cids > 0){  //查找分类ID数组
			$where['v.category_id'] = array('in',$cids);
		}
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');              //每页显示商品数
		$count = $this->alias('v')->where($where)->count(); //获取符合条件的商品总数
		$Page = new \Think\Page($count,$pagesize);          //实例化分页类
		$this->_customPage($Page);                          //定制分页类样式
		//查询数据
		$data = $this->alias('v')->join('__CATEGORYNAVS__ AS c ON c.id=v.category_id','LEFT')->field($field)
				->where($where)->order($order)->page($p,$pagesize)->select();
		//返回结果
		return array(
			'data' => $data,              //商品列表数组
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
	}

	//根据$where条件查询导航数据
	public function getGoods($where){
		//定义需要的字段
		$field = 'id,category_id,name,recommend,desc,add_time,url';
		return $this->field($field)->where($where)->find();
	}

	//插入数据前置操作
	protected function _before_insert(&$data, $option){
		$data['recycle'] = 'no';                 //新商品是未删除的
		$data['add_time'] = date('Y-m-d H:i:s'); //新商品的添加时间
	}

}
<?php
namespace Admin\Model;
use Think\Model;
class DownModel extends Model {
	//表单字段过滤
	protected $insertFields = 'sn,name,desc,on_sale,recommend,author,keywords,url,code,links';
	protected $updateFields = 'sn,name,desc,on_sale,recommend,author,keywords,url,code,links';
	//自动验证
	protected $_validate = array(
		array('name','1,100','文摘名称不合法（1-100个字符）',self::MUST_VALIDATE,'length'),
		array('sn','/^[0-9A-Za-z]{1,10}$/','文摘编号格式错误（1-10个数字/英文）',self::MUST_VALIDATE),
		array('on_sale',array('yes','no'),'on_sale字段填写错误',self::MUST_VALIDATE,'in'),
		array('recommend',array('yes','no'),'recommend字段填写错误',self::MUST_VALIDATE,'in'),
		array('desc','1,500','摘要长度不合法（1-500个字符）',self::MUST_VALIDATE,'length'),
		array('author','1,30','作者长度不合法（1-30个字符）',self::VALUE_VALIDATE,'length'),
		array('url','1,255','链接长度不合法（1-255个字符）',self::VALUE_VALIDATE,'length'),
		array('links','1,30','站内链接长度不正确（1-30个字符）',self::MUST_VALIDATE,'length'),
	);

	/**
	 * 下载列表
	 * @param string $type 数据用途（文摘列表或回收站列表）
	 * @param array|int $cids 分类ID数组
	 * @param int $p 当前页码
	 * @return array 查询结果
	 */
	public function getList($type='down',$cids=0,$p=0){
		//准备查询条件
		$order = 'a.id desc';        //排序条件
		$field = 'c.name as categorydown_name,a.category_id,a.id,a.name,a.on_sale,a.author,a.desc,a.keywords,a.recommend,a.add_time,a.url,a.links';
		if($type=='down'){          //商品列表页取数据时
			$where = array('a.recycle' => 'no');
		}elseif($type=='recycle'){   //商品回收站取数据时
			$where = array('a.recycle' => 'yes');
		}
		//cids=0查找未分类商品，cid>0查找分类ID数组商品，cid<0查找全部商品
		if($cids == 0){      //查找未分类的商品
			$where['a.category_id'] = 0;
		}elseif($cids > 0){  //查找分类ID数组
			$where['a.category_id'] = array('in',$cids);
		}
		//准备分页查询
		$pagesize = C('USER_CONFIG.pagesize');              //每页显示商品数
		$count = $this->alias('a')->where($where)->count(); //获取符合条件的商品总数
		$Page = new \Think\Page($count,$pagesize);          //实例化分页类
		$this->_customPage($Page);                          //定制分页类样式
		//查询数据
		$data = $this->alias('a')->join('__CATEGORYDOWN__ AS c ON c.id=a.category_id','LEFT')->field($field)
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

	//根据$where条件查询文摘数据
	public function getDown($where){
		//定义需要的字段
		$field = 'id,category_id,sn,name,thumb,on_sale,recommend,desc,recycle,content,add_time,author,keywords,url,links';
		return $this->field($field)->where($where)->find();
	}

	//插入数据前置操作
	protected function _before_insert(&$data, $option){
		$data['recycle'] = 'no';                 //新资源是未删除的
		$data['add_time'] = date('Y-m-d H:i:s'); //新资源的添加时间
	}

}
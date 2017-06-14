<?php
namespace Admin\Controller;
//导航控制器
class NavsController extends CommonController {

	//博客列表
	public function index() {
		//获取参数
		$p = I('get.p/d',0);       //当前页码
		$cid = I('get.cid/d',-1);  //分类ID（0表示未分类，-1表示全部分类）
		//实例化模型
		$Navs = D('Navs');
		$Categorynavs = D('Categorynavs');
		//如果分类ID大于0，则取出所有子分类ID
		$cids = ($cid>0) ? $Categorynavs->getSubIds($cid) : $cid;
		//获取博客列表
		$data['navs'] = $Navs->getList('navs',$cids,$p);
		//防止空页被访问
		if(empty($data['navs']['data']) && $p > 0){
			$this->redirect('Navs/index',array('cid'=>$cid));
		}
		//查询分类列表
		$data['categorynavs'] = $Categorynavs->getList();
		$data['cid'] = $cid;
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//导航添加
	public function add(){
		//获取参数
		$cid = I('get.cid/d',0);  //分类ID
		if($cid < 0) $cid = 0;    //防止分类ID为负数
		//实例化模型
		$Categorynavs = D('Categorynavs');
		$Navs = D('Navs');
		if(IS_POST){
			//创建数据对象
			if(!$Navs->create(null,1)){
				$this->error('添加导航失败：'.$Navs->getError());
			}
			//处理特殊字段
			$Navs->category_id = $cid; //导航分类

			//添加到数据库
			if(!$Navs->add()){
				$this->error('添加导航失败！');
			}
			//添加导航成功
			if(isset($_POST['return'])) $this->redirect('Navs/index');
			$this->assign('success',true);
		}
		//查询分类列表
		$data['categorynavs'] = $Categorynavs->getList();
		$data['cid'] = $cid;
		$this->assign($data);
		$this->display();
	}

	//导航修改
	public function edit(){
		//获取参数
		$id = I('get.id/d',0);         //待修改导航ID
		$p = I('get.p/d',0);           //当前页码
		$cid = I('get.cid/d',0,'abs'); //待修改导航的分类ID
		//实例化模型
		$Categorynavs = D('Categorynavs');
		$Navs = D('Navs');
		 //准备where条件
		$where = array('id'=>$id,'recycle'=>'no');
		if(IS_POST){
			//创建数据对象
			if(!$Navs->create(null,2)){
				$this->error('修改导航失败：'.$Navs->getError());
			}
			//处理特殊字段
			$Navs->category_id = $cid;    //保存导航分类
			//保存到数据库
			if(false === $Navs->where($where)->save()){
				$this->error('修改导航失败！');
			}
			//修改导航成功
			if(isset($_POST['return'])) $this->redirect('Navs/index',array('cid'=>$cid,'p'=>$p));
			$this->assign('success',true);
		}
		//查询导航数据
		$data['navs'] = $Navs->getGoods($where);
		if(!$data['navs']){
			$this->error('修改失败：导航不存在。');
		}
		//查询分类列表
		$data['categorynavs'] = $Categorynavs->getList();
		$data['cid'] = $cid;
		$data['id'] = $id;
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//删除导航（放入回收站）
	public function del() {
		//阻止直接访问
		if(!IS_POST) $this->error('删除失败：未选择导航');
		//获取参数
		$cid = I('get.cid/d',0); //分类ID
		$p = I('get.p/d',0);     //当前页码
		$id = I('post.id/d',0);  //待处理的导航ID
		//生成跳转地址
		$jump = U('Navs/index',array('cid'=>$cid,'p'=>$p));
		//实例化模型
		$Navs = M('Navs');
		//检查表单令牌
		if(!$Navs->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//将放入回收站
		if(false === $Navs->where(array('id'=>$id))->save(array('recycle'=>'yes'))){
			$this->error('删除导航失败',$jump);
		}
		redirect($jump); //删除成功，跳转
	}

	//商品列表快捷修改
	public function change(){
		//阻止直接访问
		if(!IS_POST) $this->error('操作失败：未选择商品');
		//获取参数
		$cid = I('get.cid/d',0);    //分类ID
		$p = I('get.p/d',0);        //当前页码
		$id = I('post.id/d',0);     //待处理商品ID
		$field = I('post.field');   //待处理字段
		$status = I('post.status');	//待处理字段值
		//生成跳转地址
		$jump = U('Navs/index',array('cid'=>$cid,'p'=>$p));
		//实例化模型
		$Navs = M('Navs');
		//检测输入变量
		if($field!='recommend'){
			$this->error('操作失败：非法字段');
		}
		if($status!='yes' && $status!='no'){
			$this->error('操作失败：非法状态值');
		}
		//检查表单令牌
		if(!$Navs->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//执行操作
		if(false === $Navs->where(array('id'=>$id,'recycle'=>'no'))->save(array($field=>$status))){
			$this->error('操作失败：数据库保存失败',$jump);
		}
		redirect($jump); //操作成功，跳转
	}

}
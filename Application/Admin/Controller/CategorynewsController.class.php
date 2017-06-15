<?php
namespace Admin\Controller;
//商品分类控制器
class CategorynewsController extends CommonController {

	//分类列表
	public function index() {
		//获取分类数据
		$data = D('Categorynews')->getList();
		$this->assign('categorynews',$data);
		$this->display();
    }

	//添加分类
	public function add(){
		//实例化模型
		$Categorynews = D('Categorynews');
		if(IS_POST){
			//创建数据对象
			if(!$Categorynews->create(null,1)){
				$this->error('添加失败：'.$Categorynews->getError());
			}
			//添加到数据库
			if(!$Categorynews->add()){
				$this->error('添加失败：保存到数据库失败。');
			}
			//添加成功
			if(isset($_POST['return'])) $this->redirect('Categorynews/index');
			$this->assign('pid',I('post.pid/d',0));  //cid用于记忆上次提交表单时选择的ID。
			$this->assign('success',true);
		}
		//获取分类数据
		$data = $Categorynews->getList();
		$this->assign('categorynews',$data);
		$this->display();
	}

	//修改分类
	public function edit(){
		//获取参数
		$id = I('get.id/d',0);  //待修改分类的ID，“/d”用于转换为整型
		//实例化模型
		$Categorynews = D('Categorynews');
		if(IS_POST){
			//检查父级分类是否合法
			if(in_array(I('post.pid/d'),$Categorynews->getSubIds($id))){
				$this->error('不允许将父级分类修改为本身或子孙分类。');
			}
			//创建数据对象
			if(!$Categorynews->create(null,2)){
				$this->error('修改失败：'.$Categorynews->getError());
			}
			//保存到数据库
			if(false === $Categorynews->where(array('id'=>$id))->save()){
				$this->error('修改失败：保存到数据库失败。');
			}
			//保存成功
			$this->redirect('Categorynews/index');
		}
		//根据ID查询分类信息
		$data = $Categorynews->field('id,name,pid')->where(array('id'=>$id))->find();
		if(!$data){
			$this->error('修改失败：分类不存在');
		}
		$data['categorynews'] = $Categorynews->getList(); //分类列表
		$this->assign($data);
		$this->display();
	}

	//删除分类
	public function del(){
		//阻止直接访问
		if(!IS_POST) $this->error('删除失败：未选择分类');
		//获取参数
		$id = I('post.id/d',0);  //待删除分类ID
		//生成跳转地址
		$jump = U('Categorynews/index');
		//实例化模型
		$Categorynews = M('Categorynews');
		//判断是否存在子分类
		if($Categorynews->where(array('pid'=>$id))->getField('id')){
			$this->error('删除失败：只允许删除最底层分类！');
		}
		//检查表单令牌
		if(!$Categorynews->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//删除分类
		if(!$Categorynews->where(array('id'=>$id))->delete()){
			$this->error('删除分类失败',$jump);
		}
		//将该分类下的商品设置为未分类
		M('News')->where(array('category_id'=>$id))->save(array('category_id'=>0));
		//删除成功，跳转到分类列表
		redirect($jump);
	}
}
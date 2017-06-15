<?php
namespace Admin\Controller;
//博客控制器
class NotesController extends CommonController {

	//博客列表
	public function index() {
		//获取参数
		$p = I('get.p/d',0);       //当前页码
		$cid = I('get.cid/d',-1);  //分类ID（0表示未分类，-1表示全部分类）
		//实例化模型
		$Notes = D('Notes');
		$Categorynote = D('Categorynote');
		//如果分类ID大于0，则取出所有子分类ID
		$cids = ($cid>0) ? $Categorynote->getSubIds($cid) : $cid;
		//获取博客列表
		$data['notes'] = $Notes->getList('notes',$cids,$p);
		//防止空页被访问
		if(empty($data['notes']['data']) && $p > 0){
			$this->redirect('Notes/index',array('cid'=>$cid));
		}
		//查询分类列表
		$data['categorynote'] = $Categorynote->getList();
		$data['cid'] = $cid;
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//笔记添加
	public function add(){
		//使用七牛云储存上传图片
		$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$Upload->autoSub = false;
		$Upload->saveName = time().'_'.mt_rand();
		$info = $Upload->upload($_FILES);
		//获取参数
		$cid = I('get.cid/d',0);  //分类ID
		if($cid < 0) $cid = 0;    //防止分类ID为负数
		//实例化模型
		$Categorynote = D('Categorynote');
		$Notes = D('Notes');
		if(IS_POST){
			//创建数据对象
			if(!$Notes->create(null,1)){
				$this->error('添加笔记失败：'.$Notes->getError());
			}
			//处理特殊字段
			$Notes->category_id = $cid; //笔记分类
						//预览图
			if(!$info) {
				$Notes->thumb = '';
			} else {
				$Notes->thumb = $info['thumb']['url'];
			}

			$Notes->content = I('post.content','','htmlpurifier'); //文摘描述（富文本过滤）

			//添加到数据库
			if(!$Notes->add()){
				$this->error('添加笔记失败！');
			}
			//添加笔记成功
			if(isset($_POST['return'])) $this->redirect('Notes/index');
			$this->assign('success',true);
		}
		//查询分类列表
		$data['categorynote'] = $Categorynote->getList();
		$data['cid'] = $cid;
		$this->assign($data);
		$this->display();
	}

	//笔记修改
	public function edit(){
		//使用七牛云储存上传图片
		$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$Upload->autoSub = false;
		$Upload->saveName = time().'_'.mt_rand();
		$info = $Upload->upload($_FILES);

		//获取参数
		$id = I('get.id/d',0);         //待修改笔记ID
		$p = I('get.p/d',0);           //当前页码
		$cid = I('get.cid/d',0,'abs'); //待修改笔记的分类ID
		//实例化模型
		$Categorynote = D('Categorynote');
		$Notes = D('Notes');
		$Notes->thumb = I('post.url');
		//准备where条件
		$where = array('id'=>$id,'recycle'=>'no');
		if(IS_POST){
			//创建数据对象
			if(!$Notes->create(null,2)){
				$this->error('修改笔记失败：'.$Notes->getError());
			}
			//处理特殊字段
			$Notes->category_id = $cid;    //保存笔记分类
			//如果有预览图文件上传，则更新预览图
			if($info) {
				$Notes->thumb = $info['thumb']['url'];  //上传成功，保存文件路径
			}
			$Notes->content = I('post.content','','htmlpurifier'); //笔记描述（富文本过滤）

			//保存到数据库
			if(false === $Notes->where($where)->save()){
				$this->error('修改笔记失败！');
			}
			//修改笔记成功
			if(isset($_POST['return'])) $this->redirect('Notes/index',array('cid'=>$cid,'p'=>$p));
			$this->assign('success',true);
		}
		//查询笔记数据
		$data['notes'] = $Notes->getGoods($where);
		if(!$data['notes']){
			$this->error('修改失败：笔记不存在。');
		}
		//查询分类列表
		$data['categorynote'] = $Categorynote->getList();
		$data['cid'] = $cid;
		$data['id'] = $id;
		$data['p'] = $p;
		$this->assign($data);
		$this->display();
	}

	//删除博客（放入回收站）
	public function del() {
		//阻止直接访问
		if(!IS_POST) $this->error('删除失败：未选择博客');
		//获取参数
		$cid = I('get.cid/d',0); //分类ID
		$p = I('get.p/d',0);     //当前页码
		$id = I('post.id/d',0);  //待处理的笔记ID
		//生成跳转地址
		$jump = U('Notes/index',array('cid'=>$cid,'p'=>$p));
		//实例化模型
		$Notes = M('Notes');
		//检查表单令牌
		if(!$Notes->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//将笔记放入回收站
		if(false === $Notes->where(array('id'=>$id))->save(array('recycle'=>'yes'))){
			$this->error('删除博客失败',$jump);
		}
		redirect($jump); //删除成功，跳转
	}

	//博客列表快捷修改
	public function change(){
		//阻止直接访问
		if(!IS_POST) $this->error('操作失败：未选择笔记');
		//获取参数
		$cid = I('get.cid/d',0);    //分类ID
		$p = I('get.p/d',0);        //当前页码
		$id = I('post.id/d',0);     //待处理笔记ID
		$field = I('post.field');   //待处理字段
		$status = I('post.status');	//待处理字段值
		//生成跳转地址
		$jump = U('Notes/index',array('cid'=>$cid,'p'=>$p));
		//实例化模型
		$Notes = M('Notes');
		//检测输入变量
		if($field!='on_sale' && $field!='recommend'){
			$this->error('操作失败：非法字段');
		}
		if($status!='yes' && $status!='no'){
			$this->error('操作失败：非法状态值');
		}
		//检查表单令牌
		if(!$Notes->autoCheckToken($_POST)){
			$this->error('表单已过期，请重新提交',$jump);
		}
		//执行操作
		if(false === $Notes->where(array('id'=>$id,'recycle'=>'no'))->save(array($field=>$status))){
			$this->error('操作失败：数据库保存失败',$jump);
		}
		redirect($jump); //操作成功，跳转
	}

	//博客详情 在线编辑器 图片上传
	public function uploadImage(){
		//上传目录
		$savePath = './Public/Uploads/content';
		//上传配置
		$config = array(
			'savePath' => $savePath,     //存储文件夹
			'subPath' => date('Y-m/d'),  //子目录
			'allowFiles' => array('.gif','.png','.jpg','.jpeg','.bmp')  //允许的文件格式
		);
		//实例化UMEditor配套的文件上传类
		$Upload = new \Components\Uploader('upfile',$config);
		//返回JSON数据给UMEditor
		$type = $_REQUEST['type'];
		$callback=$_GET['callback'];
		$info = $Upload->getFileInfo();
		$info = $callback ? "<script>$callback(".json_encode($info).')</script>' : json_encode($info);
		$this->ajaxReturn($info,'EVAL');
	}
}
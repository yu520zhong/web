<?php
namespace Home\Controller;
class TopicController extends CommonController {
	

    //发布微博
    public function publish() {
        if (IS_AJAX) {
            $Topic = D('Topic');
            $data = $Topic->publish(I('post.content'), session('userinfo.id'), I('post.images'));
			if($data != false){
				$this->ajaxReturn(array('status' => 200,'text' => $data),'JSON');
			}
		} else {
           $this->ajaxReturn(array('status' => 404,'text' => 'no faild'),'JSON');
        }
    }
	
	//双表联查后输出数据
    public function index(){
		$Topic = D('Topic');
		$topicList = $Topic->getList(0,10);
		$this->assign('topicList', $topicList);
		$this->display();
    }

   
    
	
	//Ajax获取微博列表
	public function ajaxList(){
		if (IS_AJAX) {
			$Topic = D('Topic');
			$data = $Topic->getList(I('get.first'),10);
			$this->ajaxReturn($data,'JSON');	
		} else {
            $this->error('非法访问！');
        }
    }
	
	/* //Ajax获取微博列表
	public function ajaxList(){
		if (IS_AJAX) {
			$Topic = D('Topic');
			$ajaxList = $Topic->getList(I('post.first'),10);
			$this->assign('ajaxList', $ajaxList);
			$this->display();
			
		} else {
            $this->error('非法访问！');
        }
    } */
	
	//Ajax获取总页码
	public function ajaxCount() {
		if (IS_AJAX) {
			$Topic = D('Topic');
			$count = $Topic->where('1=1')->count();
			echo ceil($count/10);
		} else {
            $this->error('非法访问！');
        }
	}
	

}





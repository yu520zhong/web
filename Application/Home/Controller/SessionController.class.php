<?php
namespace Home\Controller;
class SessionController extends CommonController{
	
	public function session(){
		/* if(session('?userinfo')){
			$result = array('status' => 200,'message' => '');
		}else{
			$result = array('status' => 404,'message' => '');
		}
		header('Content-type:application/json;charset=UTF-8');
		echo json_encode($result); PHP写法 */
		
		if(session('?userinfo')){
			$data['status']  = 200;
			$data['message'] = '';
		}else{
			$data['status']  = 404;
			$data['message'] = '请先登录';
		}
		$this->ajaxReturn($data);
    }
}

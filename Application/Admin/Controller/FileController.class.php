<?php
namespace Home\Controller;
use Think\Upload;
use Think\Image;

class FileController extends CommonController {
	//图片上传ThinkPHP自带七牛版本
	public function upload() {
		//$conids = 10;
		$setting=C('UPLOAD_SITEIMG_QINIU');
		$Upload = new \Think\Upload($setting);
		$Upload->autoSub = false;
		$Upload->saveName = time().'_'.mt_rand();
		$info = $Upload->upload($_FILES);
		echo $info['Filedata']['name'];
	}
}





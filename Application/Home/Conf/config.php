<?php
return array(
	//设置模版替换变量
	'TMPL_PARSE_STRING' => array(
		'__CSS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/css',
		'__JS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/js',
		'__IMG__'=>__ROOT__.'/Public/'.MODULE_NAME.'/img',
		'__UPLOADIFY__'=>__ROOT__.'/Public/'.MODULE_NAME.'/uploadify',
		'__PLUGINS__'=>__ROOT__.'/Public/'.MODULE_NAME.'/plugins',

	),
	//Session前缀
	'SESSION_PREFIX' => 'itcast_shop_home',
	//自定义配置
	'USER_CONFIG' => array(
		'pagesize' => 12,  //每页显示的记录数
		'goodsize' => 9,  //每页显示商品的记录数
		'search' => 9,	//每页显示搜索结果的记录数
	),
	'LIST_CONFIG' => array(
		'pagesize' => 9,  //每页显示的记录数
	),
	//图片上传路径
	'UPLOAD_PATH'=>'/Public/Uploads/source/',
	// 七牛上传
	'UPLOAD_SITEIMG_QINIU' => array (
		'maxSize' => 5 * 1024 * 1024,//文件大小
		'rootPath' => './',
		'saveName' => array (),
		'driver' => 'Qiniu',
		'driverConfig' => array (
				'secrectKey' => 'STXqv04xSw5wtzidAcGnEoGERWEq1xyjZoxEoMm6',
				'accessKey' => 'z9i3psfOzq5X6YAgC36FPMF5QoCH_ddMnHFe0HfT',
				'domain' => '7xsqlc.com1.z0.glb.clouddn.com',
				'bucket' => 'macyu',
		)
	),


	/* 错误页面模板 */
	//'TMPL_ACTION_ERROR'     =>  MODULE_PATH.'View/Public/error.html', // 默认错误跳转对应的模板文件
	//'TMPL_ACTION_SUCCESS'   =>  MODULE_PATH.'View/Public/success.html', // 默认成功跳转对应的模板文件
	//'TMPL_EXCEPTION_FILE'   =>  MODULE_PATH.'View/Public/error.html',// 异常页面的模板文件

);


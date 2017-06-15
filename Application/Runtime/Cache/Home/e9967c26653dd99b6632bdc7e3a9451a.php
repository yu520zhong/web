<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($title); ?>_觅友</title>
<meta name="keywords" content="开发工具，代码演示，常用工具，觅友，觅友网，觅友博客，觅友小站，前端，miuu,IT开发，css，css3，js，js特效，php，jquery，ajax，java">
<meta name="description" content="觅友_有朋自远方来，分享自己网站开发学习以及工作和生活中的点点滴滴，希望通过此网站，与大家一起交流、成长、进步！">
<link rel="shortcut icon" href="/web/Public/Home/img/favicon.png">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/web/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/web/Public/Home/css/bootstrap-reset.css" />

<link rel="stylesheet" href="/web/Public/home/iconfont/iconfont.css" />

<!--external css-->
<link rel="stylesheet" href="/web/Public/home/assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/web/Public/home/assets/bxslider/jquery.bxslider.css" />

<link rel="stylesheet" href="/web/Public/home/assets/revolution_slider/css/rs-style.css" media="screen" />
<link rel="stylesheet" href="/web/Public/home/assets/revolution_slider/rs-plugin/css/settings.css" media="screen" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/web/Public/Home/css/style.css" />
<link rel="stylesheet" href="/web/Public/Home/css/style-responsive.css" />

<link rel="stylesheet" href="/web/Public/Home/css/kissui.css" />
<link rel="stylesheet" href="/web/Public/Home/css/scrollanim.min.css" />

<link rel="stylesheet" href="/web/Public/Home/css/swiper.min.css" />
<link rel="stylesheet" href="/web/Public/Home/css/animate.css" />


<link rel="stylesheet" href="/web/Public/Home/plugins/layui/css/layui.css" />

<link rel="stylesheet" type="text/css" href="/web/Public/Home/plugins/simple_calendar/css/simple-calendar.css">


<link rel="stylesheet" href="/web/Public/Home/plugins/showcode/showcode.css" />
<link rel="stylesheet" href="/web/Public/Home/plugins/showcode/codemirror.min.css" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/web/Public/Home/js/html5shiv.js"></script>
<script src="/web/Public/Home/js/respond.min.js"></script>
<![endif]-->
<?php
$IMG_URL = 'http://7xsqlc.com1.z0.glb.clouddn.com/'; $IMG_THUMB = '?imageView2/1/w/100/h/100'; $IMG_BIG_W = '?imageView2/2/w/840'; $IMG_BIG_H = '?imageView2/2/h/300'; $IMG_BIG_WI = '?imageView2/2/w/840/interlace/1'; $IMG_BIG_HI = '?imageView2/2/h/300/interlace/1'; $IMG_SMALL_165 = '?imageView2/2/w/165'; ?>
<style>

</style>
</head>
<body>

<div class="wrapper wrapper-content clearfix">
  	<div class="container" style="width:100%;height:100%; font-size:12px;">
            <div class="row" style="background-color: #f5f5f5;">
                <div class="panel panel-default" style="margin-bottom:0;">
                    <div class="panel-body" style="background-color: #f5f5f5;border-color: #f5f5f5;">
                        <form autocomplete="off" role="form">
                            <div class="row">

                                <div class="col-sm-6" id="RightPane">
                                    <label>
                                        <strong style="font-size: 16px;color:#f25f5b;">
                                            运行结果：
                                        </strong>
                                    </label>
                                    <div id="iframewrapper">
                                    </div>
                                </div>
                                <div class="col-sm-6" id="LeftPane">
                                    <div class="row-fluid">
                                        <label class="inline">
                                            <strong style="font-size: 16px;color:#f25f5b;">
                                                编辑您的代码:
                                            </strong>
                                        </label>
                                        <label class="pull-right">
                                            <a href="http://www.miuu.club" style="font-size: 14px;color:#45B6F7;text-decoration: underline;">
                                                返回米鱼博客
                                            </a>
                                        </label>
                                    </div>
                                    <textarea class="form-control" id="textareaCode" name="textareaCode" ></textarea>
                                </div>
                            </div>
                            <div class="pull-right">
                                    <input id="submitBTN" onclick="submitTryit()" type="button" class="btn btn-small btn-success code-submit pull-left"
                                        value="提交运行 »">
                                        <input type="hidden" id="bt" name="bt">
                                        <input type="hidden" name="code" id="code">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>



<script type="text/javascript" src="/web/Public/Home/plugins/showcode/codemirror.min.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/htmlmixed.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/css.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/javascript.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/xml.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/closetag.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/closebrackets.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/showcode/showcode.js"></script>
</body>
</html>
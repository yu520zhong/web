<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>常用软件_觅友</title>
<meta name="keywords" content="觅友，觅友网，觅友博客，觅友小站，前端，miuu,IT开发，css，css3，js，js特效，php，jquery，ajax，java">
<meta name="description" content="觅友_有朋自远方来，分享自己网站开发学习以及工作和生活中的点点滴滴，希望通过此网站，与大家一起交流、成长、进步！">
<link rel="shortcut icon" href="/web/Public/Home/img/favicon.png">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/web/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/web/Public/Home/css/bootstrap-reset.css" />
<link rel="stylesheet" href="/web/Public/Home/fonts_music/fontCss.css" />

<link rel="stylesheet" href="/web/Public/Home/iconfont/iconfont.css" />

<!--external css-->
<link rel="stylesheet" href="/web/Public/Home/assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/web/Public/Home/assets/bxslider/jquery.bxslider.css" />

<link rel="stylesheet" href="/web/Public/Home/assets/revolution_slider/css/rs-style.css" media="screen" />
<link rel="stylesheet" href="/web/Public/Home/assets/revolution_slider/rs-plugin/css/settings.css" media="screen" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/web/Public/Home/css/style.css" />
<link rel="stylesheet" href="/web/Public/Home/css/style-responsive.css" />

<link rel="stylesheet" href="/web/Public/Home/css/kissui.css" />
<link rel="stylesheet" href="/web/Public/Home/css/scrollanim.min.css" />

<link rel="stylesheet" href="/web/Public/Home/css/swiper.min.css" />
<link rel="stylesheet" href="/web/Public/Home/css/animate.css" />
<link rel="stylesheet" href="/web/Public/Home/css/music.css" />
<link rel="stylesheet" href="/web/Public/Home/plugins/layui/css/layui.css" />

<link rel="stylesheet" type="text/css" href="/web/Public/Home/plugins/simple_calendar/css/simple-calendar.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/web/Public/Home/js/html5shiv.js"></script>
<script src="/web/Public/Home/js/respond.min.js"></script>
<![endif]-->
<?php
$IMG_URL = 'http://7xsqlc.com1.z0.glb.clouddn.com/'; $IMG_THUMB = '?imageView2/1/w/100/h/100'; $IMG_BIG_W = '?imageView2/2/w/840'; $IMG_BIG_H = '?imageView2/2/h/300'; $IMG_BIG_WI = '?imageView2/2/w/840/interlace/1'; $IMG_BIG_HI = '?imageView2/2/h/300/interlace/1'; $IMG_SMALL_165 = '?imageView2/2/w/165'; ?>
</head>
<body>
<!--header start-->
<header class="header-frontend">
    <div class="navbar navbar-default navbar-static-top" id="J_m_nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/web">MI<span>Uu</span></a>
            </div>

            <div class="navbar-collapse collapse ">
                <div class="newsticker">
                    <div class="horn"><i class="miuu u-shengyin"></i></div>
                    <ul class="newsticker-list">
                        <li class="newsticker-item">
                            本站内容纯属虚构，如有雷同，算我抄你!
                        </li>
                        <li class="newsticker-item">
                            觅友博客V2.0.2进行时，希望大家喜欢。
                        </li>
                        <li class="newsticker-item">
                            换了阿里云服务器，网站整体速度快多了。
                        </li>
                        <li class="newsticker-item">
                            文章内容如有侵权，请联系站长删除！
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav" id="menu">
                    <li id="Index_index"><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li id="Blog_index"><a href="<?php echo U('Blog/index');?>">技术文摘</a></li>
                    <li id="Notes_index"><a href="<?php echo U('Notes/index');?>">我在路上</a></li>
                    <li id="Essay_index"><a href="<?php echo U('Essay/index');?>">美文分享</a></li>
                    <li id="history_index"><a href="<?php echo U('History/index');?>">历史的今天</a></li>
                    <li id="news_index"><a href="<?php echo U('News/index');?>">小段子</a></li>
                    <li class="dropdown" id="function_index">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">应用 <i class="miuu u-xiala"></i></a>
                        <ul class="dropdown-menu">
                            <li id="tools_index"><a href="<?php echo U('Tools/tools');?>">工具箱</a></li>
                            <li id="nav_index"><a href="<?php echo U('Tools/nav');?>">日常导航</a></li>
                            <li id="down_index"><a href="<?php echo U('Down/index');?>">常用软件</a></li>
                            <li id="document_index"><a href="<?php echo U('Document/index');?>">学习文档</a></li>
                            <li id="web_index"><a href="<?php echo U('Other/webseo');?>">全站搜索</a></li>
                        </ul>
                    </li>
                    <li id="Readers_index"><a href="<?php echo U('Tools/readers');?>">留言</a></li>
                    <li id="About_index"><a href="<?php echo U('About/index');?>">关于我</a></li>
                    <li class="hidden-xs " id="navbar-search">
                      <a href="#">
                        <i class="miuu u-search"></i>
                      </a>
                      <div class="hidden" id="navbar-search-box">
                        <div class="input-group">
                          <input type="text" class="form-control" id="keywords" placeholder="请输入关键词" autocomplete="off">
                          <span class="input-group-btn">
                            <button class="btn btn-danger searchbar" type="button">点我!</button>
                          </span>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
</header>
<!--header end-->

    <!-- revolution slider start -->
    <div class="focusbox">
        <div class="container"><h1 class="focusbox-title">常用软件</h1>
            <div class="focusbox-text">收集了互联网各类资源软件,版权归原作者所有！</div>
        </div>
    </div>
    <!--container start-->
    <div class="content">
    <div class="container space30">
        <div class="row">
            <div class="col-md-8 wow fadeInLeft animated animated">
                <section class="article">
                    <ul class="filter">
                        <li class="filter-title">资源列表</li>
                        <?php if(!empty($categorydown["parent"])): if(is_array($categorydown["parent"])): $i = 0; $__LIST__ = $categorydown["parent"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                    <p class="cateline">分类<?php echo ($i); ?>：</p>
                                    <?php if(is_array($v)): foreach($v as $key=>$vv): ?><a href="<?php echo downmkFilterURL('cid',$vv['id']);?>" class="cid-<?php echo ($vv["id"]); ?>" ><?php echo ($vv["name"]); ?></a><?php endforeach; endif; ?></li>
                                </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                    <?php if(empty($down["data"])): ?><p class="no_find">很抱歉，没有找到您需要的文摘!</p><?php else: ?>
                        <?php if(is_array($down["data"])): foreach($down["data"] as $key=>$v): ?><article class="excerpt excerpt-text">
                                <div class="row">
                                    <?php if(!empty($v["thumb"])): ?><div class="col-md-4">
                                            <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" class="nail">
                                                <img src="<?php echo ($v["thumb"]); ?>" alt=""  class="thumb">
                                                <?php if(!empty($v["category_name"])): ?><span class="cat"><?php echo ($v["category_name"]); ?></span>
                                                    <?php else: ?><span class="cat">未分类</span><?php endif; ?>
                                            </a>

                                        </div>
                                        <?php else: endif; ?>
                                    <header class="col-md-8">
                                        <div class="excerpt-content">
                                            <h2 class="title">
                                                <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a>
                                            </h2>
                                            <ul class="meta list-inline">
                                                <li><i class="miuu u-rili"></i> <?php echo ($v["add_time"]); ?></li>
                                                <li class="writer"><i class="miuu u-yonghu"></i> <?php echo ($v["author"]); ?></li>
                                                <li class="pv"><i class="miuu u-eyes"></i> 下载(<?php echo ($v["click"]); ?>)</li>
                                            </ul>
                                            <p class="note"><?php echo ($v["desc"]); ?></p>
                                        </div>

                                    </header>
                                </div>
                            </article><?php endforeach; endif; endif; ?>
                </section>
                <nav class="text-center">
                    <div class="pagination"><?php echo ($down["pagelist"]); ?></div>
                </nav>
            </div>

            <div class="col-md-4 sidebar wow fadeInRight animated animated">

                <div class="widget widget-posts">
                    <h3>热门推荐</h3>
                    <ul>
                        <?php if(is_array($recommend["data"])): foreach($recommend["data"] as $key=>$v): ?><li class="widget-post-item">
                                <a target="_blank" href="<?php echo U('News/news',array('id'=>$v['id']));?>">
                                    <div class="img-box">
                                        <?php if(!empty($v["thumb"])): ?><img class="thumb" src="<?php echo ($v["thumb"]); ?>" >
                                            <?php else: endif; ?>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box-inner">
                                            <span class="text font15">
                                                <?php echo ($v["name"]); ?>
                                            </span>
                                            <div class="tips">
                                                <span class="muted left"><?php echo ($v["add_time"]); ?></span>
                                                <span class="muted right">浏览（<?php echo ($v["click"]); ?>）</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="widget widget-posts">
                    <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-2.png" class="full-img"></a>
                </div>

                <div class="widget widget-posts clearfix">
                    <div id="calendar"></div>
                </div>

                <div class="widget widget-posts" >
                   <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-5.jpg" class="full-img"></a>
                </div>
            </div>
            <!--feature end-->
        </div>
    </div></div>
<!--footer start-->
<footer>
<div class="footer-top clearfix">
    <div class="container">
        <div class="row">
            <ul class="links list-inline">
                <li><a href="http://lusongsong.com/" target="_blank">卢松松</a></li>
                <li><a href="http://www.ishishang.top/" target="_blank">爱时尚</a></li>
                <li><a href="http://www.taiyangxiao.com/" target="_blank">太阳笑了</a></li>
                <li><a href="http://layer.layui.com/" target="_blank">LayUI</a></li>
                <li><a href="http://themebetter.com/" target="_blank">themebetter</a></li>
                <li><a href="http://themebetter.com/" target="_blank">ThinkPHP</a></li>
                <li><a href="<?php echo U("Tools/mergely");?>" target="_blank">代码对比工具</a></li>
            </ul>
            <p class="text-muted text-center">©2016 <a href="<?php echo U("About/index");?>">Miuu</a><span id="webTime"></span></p>
            <p class="text-muted text-center">
                <a class="mr10" href="tencent://message/?uin=2211735722&amp;与我交流&amp;Menu=yes" target="_blank">
                    <img border="0" src="http://wpa.qq.com/pa?p=1:2211735722:16" alt="点击我">
                </a>
                <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=aFldUVhaWV1bWl1bKBkZRgsHBQ" class="mr10">
                    <img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_01.png">
                </a>
                <a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?url=http%3A%2F%2Flocalhost%2Fmake%2F&amp;to=qqmail&amp;desc=&amp;summary=&amp;title=&amp;site=&amp;pics=">
                    <img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_share_01.png">
                </a>
            </p>
            <p class="text-muted text-center weather-content">
                <iframe src="//www.seniverse.com/weather/weather.aspx?uid=U1E8D42C92&cid=CHBJ000000&l=zh-CHS&p=SMART&a=1&u=C&s=4&m=2&x=0&d=3&fc=C6C6C6&bgc=&bc=&ti=0&in=0&li=" frameborder="0" scrolling="no" width="500" height="27" allowTransparency="true"></iframe>
            </p>
            <div class="music-bg" id="music-bg">
         </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="copyrights">
            <p class="text-center">Copyright &copy; 2017.Company name All rights reserved.<a href="<?php echo U('Other/webstate');?>">觅友网</a>_V2.0.1_苏ICP备17033567号-1 - More <a href="<?php echo U('About/index');?>" target="_blank" title="关于我">-About Us</a></p>
        </div>
    </div>
</div>
<a href="#" id="toTop"></a>
</footer>
<!--footer end-->

<!-- JavaScript -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="/web/Public/Home/js/jquery.js"></script>
<script src="/web/Public/Home/js/bootstrap.min.js"></script>
<script src="/web/Public/Home/js/hover-dropdown.js"></script>
<script src="/web/Public/Home/js/common.js"></script>
<script src="/web/Public/Home/js/main-scripts.js"></script>
<script src="/web/Public/Home/js/scrollanim.min.js"></script>
<script src="/web/Public/Home/js/music.js"></script>
<script src="/web/Public/Home/js/jquery.newsticker.js"></script>
<script src="/web/Public/Home/js/wow.min.js"></script>



<script>
new WOW().init();
window.onload = function(){
	MC.music({
		hasAjax:false,
		left:'50%',
		bottom:'50%',
		musicChanged:function(ret){
			// alert(ret.url);
			// getMusic_buffer(ret.url);
			// return;
			// var data = ret.data;
			// var index = ret.index;
			// var imageUrl = data[index].img_url;
			// var music_bg = document.getElementById('music-bg');
			// music_bg.style.background = 'url('+imageUrl+')no-repeat';

		},
		getMusicInfo:function(data){

		},

		musicPlayByWebAudio:function(ret){

		},
	});
}

var ThinkPHP = {
    'MODULE' : '/web/Home',
    'ROOT' : '/web',
    'IMG' : '/web/Public/<?php echo MODULE_NAME;?>/img',
    'FACE' : '/web/Public/<?php echo MODULE_NAME;?>/face',
    'PLUGINS' : '/web/Public/<?php echo MODULE_NAME;?>/plugins',
    'JS' : '/web/Public/Home/js',
    'UPLOADIFY' : '/web/Public/Home/uploadify',
    'UPLOADER' : '<?php echo U("File/upload");?>',
    'INDEX' : '<?php echo U("Index/index");?>',
    'SEARCH' : '<?php echo U("Home/Other/search");?>',
};
</script>
<script type="text/javascript" src="/web/Public/Home/plugins/layui/layui.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/layui/lay/dest/layui.all.js"></script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ba6f742ccf462cb7a9d6dca60a7a90ea";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();


(function(){
    $(".swiper-container").mouseover(function (){
        $(".swiper-button-prev").addClass('class_name');
    }).mouseout(function (){
        $(".swiper-button").hide();
    });
})();


//自执行匿名函数
(function(){
    window.setTimeout(arguments.callee, 1000);
    //建站时间
    var BirthDay = new Date("12/31/2016 00:00:00");
    //现在时刻
    var today = new Date();
    //运行时间 = 现在时刻 - 建站时间
    timeover = (today.getTime() - BirthDay.getTime());
    sectimeover = timeover / 1000;
    secondsover = Math.floor(sectimeover);
    msPerDay = 24 * 60 * 60 * 1000;
    e_daysover = timeover / msPerDay;
    daysover = Math.floor(e_daysover);
    e_hrsover = (e_daysover - daysover) * 24;
    hrsover = Math.floor(e_hrsover);
    e_minsover = (e_hrsover - hrsover) * 60;
    minsover = Math.floor((e_hrsover - hrsover) * 60);
    seconds = Math.floor((e_minsover - minsover) * 60);
    webTime.innerHTML = "·觅友博客已运行：" + daysover + "天" + hrsover + "小时" + minsover + "分" + seconds + "秒";
})();
document.getElementsByTagName('iframe')[0].width="500";
</script>


<script src="/web/Public/Home/plugins/simple_calendar/js/simple-calendar-es6.js"></script>
<script src="/web/Public/Home/plugins/simple_calendar/js/simple-calendar-options.js"></script>

<script>
    // js跳转到搜索结果页面
    $('.search').blur(function() {
        location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).text();
    });
    //导航条选中效果
    //筛选列表，分类的当前选中效果
    <?php if(is_array($categorydown["pids"])): foreach($categorydown["pids"] as $key=>$v): ?>$(".cid-<?php echo ($v); ?>").addClass("curr");<?php endforeach; endif; ?>
//文章排序的选中效果
    <?php if(isset($_GET['order'])): ?>$(".order-<?php echo ($_GET['order']); ?>").addClass("curr");
    <?php else: ?>
    $(".order-0").addClass("curr");<?php endif; ?>
$("#Down_index").addClass("active");
    $("#down_index").addClass("active");
    $("#Function_index").addClass("active");
</script>
</body>
</html>
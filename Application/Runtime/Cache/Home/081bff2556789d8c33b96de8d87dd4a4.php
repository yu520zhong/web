<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>学习文档_觅友</title>
<meta name="keywords" content="觅友，觅友网，觅友博客，觅友小站，前端，miuu,IT开发，css，css3，js，js特效，php，jquery，ajax，java">
<meta name="description" content="觅友_有朋自远方来，分享自己网站开发学习以及工作和生活中的点点滴滴，希望通过此网站，与大家一起交流、成长、进步！">
<link rel="stylesheet" href="/web/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/web/Public/Home/css/style.css" />
<link rel="stylesheet" href="/web/Public/home/iconfont/iconfont.css" />

<link href="/web/Public/Home/plugins/mixitup/css/mixitup.css" rel="stylesheet" type="text/css" media="all" />
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
</header>
<!--header end-->



    <!-- revolution slider start -->
    <div class="focusbox">
            <div class="container">
            <h1 class="focusbox-title">在线学习文档</h1>
            <div class="focusbox-text">在线学习,在学习中整理文档,我在努力中！</div>
            </div>
    </div>
    <!--container start-->
    <div class="content">
        <div class="container">
    <div class="portfolio-content">
            <!-- portfolio -->
            <div class="portfolio-section" id="portfolio">          
                <!-- head-section -->
                    <div class="head-section text-center">
                        <h2>文档分类</h2>
                        <span> </span>
                    </div>
                    <!-- /head-section -->
                 <ul id="filters" class="clearfix">
                        <li><span class="filter active" data-filter="app card icon logos web">全部</span></li>
                        <li><span class="filter" data-filter="app">JAVA</span></li>
                        <li><span class="filter" data-filter="card">JS</span></li>
                        <li><span class="filter" data-filter="icon">CSS</span></li>
                        <li><span class="filter" data-filter="logos">HTML</span></li>
                        </ul>
                    <div id="portfoliolist">
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="<?php echo U('Document/java');?>" class="swipebox"  title="java文档"> <img src="/web/Public/Home/plugins/mixitup/images/pic-1.jpg" class="img-responsive" alt=""><span class="zoom-icon"> </span> </a> </a>
                        </div>
                    </div>              
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="<?php echo U('Document/enumjava');?>" class="swipebox"  title="enumjava"> <img src="/web/Public/Home/plugins/mixitup/images/pic-2.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>                  
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-3.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-3.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>

                    </div>
                    
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-4.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-4.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>          
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-5.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-5.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>  
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-6.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-6.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>  
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-7.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-7.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                        </div>
                        <div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-8.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-8.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>
                        <div class="portfolio logos mix_all wow bounceIn" data-wow-delay="0.4s" data-cat="logos" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="http"//baidu.com class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-9.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>
                        </div>
                    </div>
                    <div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-10.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-10.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>
                    <div class="portfolio icon mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="icon" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-11.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-11.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>  
                        </div>
                    <div class="portfolio card mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="card" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper grid_box">        
                             <a href="/web/Public/Home/plugins/mixitup/images/pic-12.jpg" class="swipebox"  title="Image Title"> <img src="/web/Public/Home/plugins/mixitup/images/pic-12.jpg" class="img-responsive" alt=""><span class="zoom-icon"></span> </a>

                        </div>
                    </div>                  
<div class="clearfix"></div>                    
                </div>          
<div class="clearfix"></div>    
            </div>

            </div>
        </div>
    </div>
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
            <p class="text-muted text-center">©2016 <a href="<?php echo U("About/index");?>">Macyu</a><span id="webTime"></span></p>
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

         </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="copyrights">
            <p>Copyright &copy; 2017.Company name All rights reserved.<a href="<?php echo U('Index/index');?>">觅友网</a> - More <a href="<?php echo U('About/index');?>" target="_blank" title="关于我">-About Us</a></p>
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

<script>

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
    webTime.innerHTML = "·米鱼博客已运行：" + daysover + "天" + hrsover + "小时" + minsover + "分" + seconds + "秒";
})();
document.getElementsByTagName('iframe')[0].width="500";
</script>
<script>
    // js跳转到搜索结果页面
    $('.search').blur(function() {
        location.href = ThinkPHP['MODULE'] + '/other/search?keywords=' + $(this).text();
    });
   
    $("#document_index").addClass("active");
    $("#Function_index").addClass("active");
</script>

<!-- Script for gallery Here -->
    <script type="text/javascript" src="/web/Public/Home/plugins/mixitup/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="/web/Public/Home/plugins/mixitup/js/jquery.easing.min.js"></script>

    <script type="text/javascript">
    $(function () {
        
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });             
            
            },
            
            hoverEffect: function () {
            
                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');             
                    },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');                               
                    }       
                );              
            
            }

        };
        
        // Run the show!
        filterList.init();
        
        
    }); 
    </script>
</body>
</html>
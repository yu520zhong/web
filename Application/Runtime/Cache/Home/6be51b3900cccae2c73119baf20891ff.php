<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($title); ?>_觅友</title>
<meta name="keywords" content="<?php echo ($news["keywords"]); ?>--小段子，觅友">
<meta name="description" content="<?php echo ($news["desc"]); ?>">
<link rel="shortcut icon" href="/Public/Home/img/favicon.png">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/Public/Home/css/bootstrap-reset.css" />

<link rel="stylesheet" href="/Public/Home/iconfont/iconfont.css" />

<!--external css-->
<link rel="stylesheet" href="/Public/Home/assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/Public/Home/assets/bxslider/jquery.bxslider.css" />

<link rel="stylesheet" href="/Public/Home/assets/revolution_slider/css/rs-style.css" media="screen" />
<link rel="stylesheet" href="/Public/Home/assets/revolution_slider/rs-plugin/css/settings.css" media="screen" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/Public/Home/css/style.css" />
<link rel="stylesheet" href="/Public/Home/css/style-responsive.css" />

<link rel="stylesheet" href="/Public/Home/css/kissui.css" />
<link rel="stylesheet" href="/Public/Home/css/scrollanim.min.css" />

<link rel="stylesheet" href="/Public/Home/css/swiper.min.css" />
<link rel="stylesheet" href="/Public/Home/css/animate.css" />


<link rel="stylesheet" href="/Public/Home/plugins/layui/css/layui.css" />

<link rel="stylesheet" type="text/css" href="/Public/Home/plugins/simple_calendar/css/simple-calendar.css">


<link rel="stylesheet" href="/Public/Home/css/index.css" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/Public/Home/js/html5shiv.js"></script>
<script src="/Public/Home/js/respond.min.js"></script>
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
                <a class="navbar-brand" href="">MI<span>Uu</span></a>
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
<section class="focusbox">
    <div class="container">
        <h1 class="focusbox-title">小段子</h1>
        <div class="focusbox-text">生活处处皆段子，人生百态，冷暖是非！</div>
    </div>
</section>
<!--container start-->
<div class="content">
    <div class="container container-no-sidebar space30">
        <div class="row">
            <div class="col-md-8">
                <div class="content single">
                    <header class="article-header">
                       <h1 class="article-title"><a href="#"><?php echo ($news["name"]); ?></a></h1>
                       <div class="article-meta">
                           <span class="item"><?php echo ($news["add_time"]); ?></span>
                           <span class="item">来源：<a href="<?php echo ($news["url"]); ?>" target="_blank"><?php echo ($news["source"]); ?></a></span>
                           <span class="item post-views">阅读(<?php echo ($news["click"]); ?>)</span>
                       </div>
                    </header>
                    <article class="article-content">
                    <?php if(!empty($news["thumb"])): ?><p class="text-center">
                            <img class="alignnone size-full wp-image-74" src="<?php echo ($news["thumb"]); ?>" />
                        </p>
                        <?php else: endif; ?>
                       <?php echo ($news["content"]); ?>
                    </article>
                    <ul class="pager clearfix">
                        <?php if(empty($prev)): else: ?>
                            <li class="previous">
                                <a title="<?php echo ($prev["name"]); ?>" href="<?php echo U('News/news',array('id'=>$prev['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($prev["name"]); ?>">上一篇</a>
                            </li><?php endif; ?>
                        <?php if(empty($next)): else: ?>
                            <li class="next">
                                <a title="<?php echo ($next["name"]); ?>" href="<?php echo U('News/news',array('id'=>$next['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($next["name"]); ?>">下一篇</a>
                            </li><?php endif; ?>
                    </ul>
                    <div class="relates"><div class="title"><h3>相关推荐</h3></div>
                        <ul>
                            <?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><li>
                                    <a href="<?php echo U('News/news',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a>
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sidebar">
                <div class="widget widget-posts">
                    <h3>最新推荐</h3>
                    <ul>
                        <?php if(is_array($latest["data"])): foreach($latest["data"] as $key=>$v): ?><li class="widget-post-item">
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
                                                <span class="muted right">阅读（<?php echo ($v["click"]); ?>）</span>
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
                <div class="widget widget-posts" >
                    <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-1.jpg" class="full-img"></a>
                </div>
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

         </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="copyrights">
            <p class="text-center">Copyright &copy; 2017.Company name All rights reserved.<a href="<?php echo U('Index/index');?>">觅友网</a> - More <a href="<?php echo U('About/index');?>" target="_blank" title="关于我">-About Us</a></p>
        </div>
    </div>
</div>
<a href="#" id="toTop"></a>
</footer>
<!--footer end-->


<!-- JavaScript -->
<!-- js placed at the end of the document so the pages load faster -->
<script src="/Public/Home/js/jquery.js"></script>
<script src="/Public/Home/js/bootstrap.min.js"></script>
<script src="/Public/Home/js/hover-dropdown.js"></script>
<script src="/Public/Home/js/common.js"></script>
<script src="/Public/Home/js/main-scripts.js"></script>
<script src="/Public/Home/js/scrollanim.min.js"></script>

<script>

var ThinkPHP = {
    'MODULE' : '/Home',
    'ROOT' : '',
    'IMG' : '/Public/<?php echo MODULE_NAME;?>/img',
    'FACE' : '/Public/<?php echo MODULE_NAME;?>/face',
    'PLUGINS' : '/Public/<?php echo MODULE_NAME;?>/plugins',
    'JS' : '/Public/Home/js',
    'UPLOADIFY' : '/Public/Home/uploadify',
    'UPLOADER' : '<?php echo U("File/upload");?>',
    'INDEX' : '<?php echo U("Index/index");?>',
    'SEARCH' : '<?php echo U("Home/Other/search");?>',
};
</script>
<script type="text/javascript" src="/Public/Home/plugins/layui/layui.js"></script>
<script type="text/javascript" src="/Public/Home/plugins/layui/lay/dest/layui.all.js"></script>

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
<script>
$("#News_index").addClass("active");
</script>
</body>
</html>
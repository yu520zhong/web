<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($articles["name"]); ?>_觅友</title>
<meta name="keywords" content="<?php echo ($articles["keywords"]); ?>">
<meta name="description" content="<?php echo ($articles["desc"]); ?>">
<!-- Bootstrap core CSS -->
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
<link rel="stylesheet" href="/web/Public/Home/plugins/templatemo/css/templatemo-style.css" />
<link rel="stylesheet" href="/web/Public/Home/plugins/layui/css/layui.css" />

<link rel="stylesheet" type="text/css" href="/web/Public/Home/plugins/simple_calendar/css/simple-calendar.css">

<link rel="stylesheet" href="/web/Public/Home/plugins/docs/docs.css" />

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
                            换了阿里云服务器,网站整体速度快多了
                        </li>
                        <li class="newsticker-item">
                            觅友博客V2.0开始开发中,希望大家喜欢
                        </li>
                        <li class="newsticker-item">
                            内容如有侵犯，请立即联系管理员删除
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
        <div class="container">
        <h1 class="focusbox-title">JAVA·枚举</h1>
        <div class="focusbox-text">快速归类整数常数！</div>
        </div>
    </div>

<div class="content">
<div class="container bs-docs-container" >
    <div class="row">
        <div class="col-md-2">
            <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
                <ul class="nav bs-docs-sidenav">
                    <li class="active">
                        <a href="#enumload">枚举简介</a>
                    </li>
                    <li class="">
                        <a href="#whats-included">Java中的枚举</a>
                        <ul class="nav">
                            <li class=""><a href="#whats-included-precompiled">常见的枚举定义方法</a></li>
                            <li class=""><a href="#whats-included-source">在程序中使用枚举</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="back-to-top" href="#top">
                    返回顶部
                </a>
            </nav>
        </div>

        <div class="col-md-8">
            <div class="bs-docs-section">
                <h2 id="enumload" class="page-header">枚举简介</h2>
                <p class="lead">目前计算机的功能不仅局限于加减乘除等数值的计算，还被拓展至非数值数据的处理，例如，天气、性别、星期几、颜色、职业等这些都不是数值数据。程序设计中，往往存在着这样的“数据集”，它们的数值在程序中是稳定的，而且“数据集”中的元素是有限的，通常用一个数组代替一种状态，如0代表红色(red),代表绿色 (green),</p>
            </div>

            <div class="bs-docs-section">
                <h2 id="whats-included" class="page-header">Java中的枚举
                </h2>

                <p class="lead">Bootstrap 提供了两种形式的压缩包，在下载下来的压缩包内可以看到以下目录和文件，这些文件按照类别放到了不同的目录内，并且提供了压缩与未压缩两种版本。</p>

                <div class="bs-callout bs-callout-warning" id="jquery-required">
                    <h4>Bootstrap 插件全部依赖 jQuery</h4>
                    <p>请注意，<strong>Bootstrap 的所有 JavaScript 插件都依赖 jQuery，</strong>因此 jQuery 必须在 Bootstrap 之前引入，就像在<a
                            href="#template">基本模版</a>中所展示的一样。在<a
                            href="https://github.com/twbs/bootstrap/blob/v3.3.7/bower.json"> <code>bower.json</code> 文件中</a>
                        列出了 Bootstrap 所支持的 jQuery 版本。</p>
                </div>

                <h3 id="whats-included-precompiled">常见的枚举定义方法
                </h3>
                <p>下载压缩包之后，将其解压缩到任意目录即可看到以下（压缩版的）目录结构：</p>
                <!-- NOTE: This info is intentionally duplicated in the README.
                Copy any changes made here over to the README too. -->
                <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                <figure class="highlight"><pre><!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></pre>
                </figure>
                <!-- NOTE: This info is intentionally duplicated in the README.
                Copy any changes made here over to the README too. -->

                <h3 id="whats-included-source">在程序中使用枚举</h3>
                <p>Bootstrap 源码包含了预先编译的 CSS、JavaScript 和图标字体文件，并且还有 LESS、JavaScript 和文档的源码。具体来说，主要文件组织结构如下：</p>
                <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div>
                <figure class="highlight"><pre><code class="language-bash" data-lang="bash">bootstrap/
├── less/
├── js/
├── fonts/
├── dist/
│   ├── css/
│   ├── js/
│   └── fonts/
└── docs/
    └── examples/</code></pre>
                </figure>
                <p><code>less/</code>、<code>js/</code> 和 <code>fonts/</code> 目录分别包含了 CSS、JS 和字体图标的源码。<code>dist/</code>
                    目录包含了上面所说的预编译 Bootstrap 包内的所有文件。<code>docs/</code> 包含了所有文档的源码文件，<code>examples/</code> 目录是 Bootstrap
                    官方提供的实例工程。除了这些，其他文件还包含 Bootstrap 安装包的定义文件、许可证文件和编译脚本等。</p>
            </div>
            <p class="post-copyright">本文档系在学习中的技术点总结,版权属原技术所有!</p>
			<div style="margin-bottom: 30px;">

            	<div class="content">
                    <ul class="pager clearfix">
                            <li class="previous"><a href="<?php echo U('Blog/articles',array('id'=>$prev['id']));?>" class="tooltip-test" data-toggle="tooltip" title="JAVA">Prev</a></li>
                            <li class="next"><a href="<?php echo U('Blog/articles',array('id'=>$prev['id']));?>" class="tooltip-test" data-toggle="tooltip" title="JS">Next</a></li>
                    </ul>
                </div>
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

<script src="/web/Public/Home/js/jquery.js"></script>
<script src="/web/Public/Home/js/bootstrap.min.js"></script>
<script src="/web/Public/Home/js/common.js"></script>

<script type="text/javascript" src="/web/Public/Home/plugins/layui/layui.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/layui/lay/dest/layui.all.js"></script>

<script src="/web/Public/Home/plugins/docs/docs.min.js"></script>
<script src="/web/Public/Home/plugins/zeroClipboard/ZeroClipboard.js"></script>


<script>

$(function() {
    var client = new ZeroClipboard( $(".btn-clipboard") );

    client.on( "ready", function( readyEvent ) {
    // alert( "ZeroClipboard SWF is ready!" );
    client.on( 'copy', function(event) {
            var code = $(event.target).parent().next().find('.layui-code-ol').text();
          event.clipboardData.setData('text/plain',code);
        } );
    client.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
        layer.msg('恭喜您，成功复制代码！', {time: 1000});
      } );
    } );
    client.on( 'error', function(event) {
        console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
        ZeroClipboard.destroy();
    } );

})

</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ced2bfdf081a8c7f45add898cecdacc2";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();


</script>

<script>
layui.use('code', function(){ //加载code模块
  layui.code({
    elem: 'pre',
     title: 'show_Miuu',
     encode: true,
     height: 550,
     about: false
  });
});
</script>

<script>
$("#document_index").addClass("active");
$("#Function_index").addClass("active");

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

</body>
</html>
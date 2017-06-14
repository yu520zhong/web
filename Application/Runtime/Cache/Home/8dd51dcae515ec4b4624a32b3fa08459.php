<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($title); ?>_觅友</title>
<meta name="keywords" content="觅友，觅友网，觅友博客，觅友小站，前端，miuu,IT开发，css，css3，js，js特效，php，jquery，ajax，java">
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
                    <li class="dropdown" id="function_index">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">应用 <i class="miuu u-xiala"></i></a>
                        <ul class="dropdown-menu">
                            <li id="news_index"><a href="<?php echo U('News/index');?>">小段子</a></li>
                            <li id="tools_index"><a href="<?php echo U('Tools/tools');?>">工具箱</a></li>
                            <li id="nav_index"><a href="<?php echo U('Tools/nav');?>">日常导航</a></li>
                            <li id="down_index"><a href="<?php echo U('Down/index');?>">常用软件</a></li>
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



<section class="focusbox" >
    <div class="container">
        <h1 class="focusbox-title">工具箱</h1>
        <div class="focusbox-text">常言道:工欲善其事必先利器。好工具是让编程更轻松更顺利的保障</div>
    </div>
</section>
<div class="wrapper wrapper-content clearfix content">
  	<div class="container space30">
    	<div class="row">
            <div class="col-sm-12">
                <div class="container archives">
                <ol class="breadcrumb tool-breadcrumb">
                    <li><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Tools/tools');?>">我的工具箱</a></li>
                    <li class="active">JS/HTML格式化工具</li>
                </ol>
                <!-- /工具开始 -->
                <div class="toolcode text-left">
                    <h3>
                        CSS代码格式化工具:
                    </h3>
                    <p class="sign_color">请将CSS代码复制到下面表单中:</p>
                    <div id="mainContent" class="tool_content">
                    <div class="toolUsing form-field ">
                        <form id="codeformat_form">
                        <div class="topBar">
                            <h4> 待格式化CSS：</h4>

                            <span>
                                <textarea name="css" class="resizable toolcode_text" id="cssdata" onChange='format_()' onKeyUp='format_()'
                            class="resizable">
/*演示代码*/
@charset "UTF-8";
html,body {
-webkit-touch-callout:none;
-webkit-text-size-adjust:none;
-webkit-tap-highlight-color:rgba(0, 0, 0, 0);
-webkit-user-select:none;
width: 100%;
}
/*演示代码*/
                            </textarea>
                            </span>

                        </div>
                        <div class="form-inline clearfix">
                            <p class="pull-left mtop15">
                            <label class="radio-inline">
                                <input type="radio" name="indent" id="tab" onchange="format_()" checked/>
                                Tab
                            </label>
                            <label class="radio-inline" style="margin-right:10px;">
                                <input type="radio" name="indent" id="whitespace" onchange="format_()"
                                />
                                Spaces
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="openbrace" id="openbrace-end-of-line" onchange="format_()"
                                checked />
                                行结束
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="openbrace" id="openbrace-separate-line" onchange="format_()"
                                />
                                换行
                            </label>
                            </p>
                            <p class="pull-right btnbox">
                                <input class="btn btn-small btn-primary" data-loading-text="正在格式化CSS..."
                                id="format" type="button" onclick="format_()" value="格式化" />
                                <input class="btn btn-small btn-success btn-format" id="copy_format" type="button" data-clipboard-action="copy" data-clipboard-target="#fcss"
                                value="复制格式化代码" />
                            </p>
                        </div>
                        <div class="bottomBar">
                        <h4>
                                格式化后CSS：
                        </h4>
                            <textarea id="fcss" name="fcss" class="resizable toolcode_text"></textarea>
                        </div>
                    </form>
                        </div>
                    </div>
                    <div class="relates">
                        <h3>推荐工具箱</h3>
                        <ul>
                            <li>
                                <a href="<?php echo U('Tools/jsformat');?>">JS/HTML格式化工具</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Tools/cssformat');?>">CSS代码格式化工具</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Tools/mergely');?>">代码对比工具</a>
                            </li>
                        </ul>
                    </div>
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
            <p>Copyright &copy; 2017.Company name All rights reserved.<a href="#">觅友网</a> - More <a href="" target="_blank" title="关于我">-About Us</a></p>
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
<!-- swiper -->
<script src="/web/Public/Home/js/swiper.min.js"></script>
<script src="/web/Public/Home/js/swiper.animate.min.js"></script>

<script src="/web/Public/Home/plugins/simple_calendar/js/simple-calendar-es6.js"></script>
<script>
    var myoptions = {
        width: '100%',
        height: '300px',
        language: 'CH', //语言
        showLunarCalendar: true, //阴历
        showHoliday: true, //休假
        showFestival: true, //节日
        showLunarFestival: true, //农历节日
        showSolarTerm: true, //节气
        showMark: true, //标记
        timeRange: {
        startYear: 1949,
        endYear: 2068
    },
    mark: {
        '2018-4-16': '而立之年'
    },
    theme: {
        changeAble: false,
        weeks: {
          backgroundColor: '#FBEC9C',
          fontColor: '#4A4A4A',
          fontSize: '20px',
        },
        days: {
          backgroundColor: '#ffffff',
          fontColor: '#565555',
          fontSize: '24px'
        },
        todaycolor: 'orange',
        activeSelectColor: 'orange',
    }
    }
    var myCalendar = new SimpleCalendar('#calendar',myoptions); 
    
</script>


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

<script type="text/javascript" src="/web/Public/Home/plugins/clipboard/clipboard.min.js"></script>
<script type="text/javascript" src="/web/Public/Home/js/format.js"></script>
<script type="text/javascript" src="/web/Public/Home/js/jsformat.js"></script>
<script type="text/javascript" src="/web/Public/Home/js/htmlformat.js"></script>
<script type="text/javascript" src="/web/Public/Home/js/cssbeautify.js"></script>
    <script type="text/javascript">
        function format_() {
            var style = $("#cssdata").val();
            var options;
            options = {
                indent: '    '
            };
            if (document.getElementById('tab').checked) {
                options.indent = '\t';
            }
            if (document.getElementById('openbrace-separate-line').checked) {
                options.openbrace = 'separate-line';
            }
            var fmt = cssbeautify(style, options);
            $("#fcss").val(fmt);
        }

        //复制格式化代码
        var clipboard = new Clipboard('.btn-format');
        clipboard.on('success', function(e) {
            console.info('Action:', e.action);
            console.info('Text:', e.text);
            console.info('Trigger:', e.trigger);
            layer.msg('成功复制格式化代码！');
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            console.error('Action:', e.action);
            console.error('Trigger:', e.trigger);
        });
    </script>
    <script> $("#Function_index").addClass("active"); </script>
</body>
</html>
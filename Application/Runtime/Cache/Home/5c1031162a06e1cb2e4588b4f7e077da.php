<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title><?php echo ($essay["name"]); ?>_觅友</title>
<meta name="keywords" content="<?php echo ($essay["keywords"]); ?>">
<meta name="description" content="<?php echo ($essay["desc"]); ?>">
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

<link rel="stylesheet" href="/web/Public/Home/css/index.css" />
<link rel="stylesheet" href="/web/Public/Home/plugins/codemirror/codemirror.css" />
<link rel="stylesheet" href="/web/Public/Home/plugins/codemirror/ambiance.css" />
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
            <h1 class="focusbox-title">美文分享</h1>
            <div class="focusbox-text">品味经典，感悟人生的文章故事,我的人生我感触！</div>
            </div>
    </div>
            <!--container start-->
    <div class="content">
    <div class="container space30">
        <div class="row">
            <div class="col-md-8 single">

                <div class="content">
                    <header class="article-header">
                        <h1 class="article-title"><a href="#"> <?php echo ($essay["name"]); ?></a>
                        </h1>
                        <div class="article-meta">
                            <span class="item"><?php echo ($essay["add_time"]); ?></span>
                            <span class="item">作者：<?php echo ($essay["author"]); ?></span>
                            <span class="item">来源：<?php echo ($essay["source"]); ?></span>
                            <span class="item post-views">阅读(<?php echo ($essay["click"]); ?>)</span>
                            <span class="item post-views">评论(<a href="#SOHUCS"><span id="changyan_count_unit"></span></a>)</span>

                            <span class="item">
                                <a class="digest-label-link" href="<?php echo essaymkFilterURL('cid',$vv['id']);?>" target="_blank"><?php echo ($v["category_name"]); ?></a>
                            </span>
                        </div>
                    </header>

                    <article class="article-content">
                            <?php if(!empty($essay["thumb"])): ?><p class="text-center">
                                    <img class="alignnone size-full wp-image-74" src="<?php echo ($essay["thumb"]); ?>" alt="<?php echo ($essay["name"]); ?>">
                                </p>
                                <?php else: endif; ?>
                            <?php echo ($essay["content"]); ?>
                            <?php if(!empty($essay["code"])): ?><p>
                                    <textarea name="code" id="code" class="codeshow"><?php echo ($essay["code"]); ?></textarea>
                                    <button class="btn btn-sm mt15" onclick="Preview(code)">运行代码</button>
                                </p>
                                <?php else: endif; ?>
                        <p class="post-copyright">本文系互联网摘录，转载请注明出处：<?php if(is_array($path)): foreach($path as $key=>$v): ?>&nbsp;
                                <a href="<?php echo U('Essay/index',array('cid'=>$v['id']));?>">
                                    <?php echo ($v["name"]); ?>
                                </a>
                                &nbsp;&gt;<?php endforeach; endif; ?>
                            &nbsp;<?php echo ($essay["name"]); ?>
                        </p>
                </article>

                    <div class="post-linkto text-center"><a class="btn btn-success btn-lg" href="<?php echo ($essay["url"]); ?>"
                                                target="_blank" >原文链接</a></div>
                    <div class="share-single"><div class="action-share bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1473947264016">
                        分享到：
                        <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                        <a class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        <a class="bds_bdhome" data-cmd="bdhome" title="分享到百度新首页"></a>
                        <a class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a>
                        <a class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a class="bds_diandian" data-cmd="diandian" title="分享到点点网"></a>
                        <a class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a>
                        <a class="bds_ty" data-cmd="ty" title="分享到天涯社区"></a>
                        <a class="bds_kaixin001" data-cmd="kaixin001" title="分享到开心网"></a>
                        <a class="bds_taobao" data-cmd="taobao"></a>
                        <a class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a>
                        <a class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a>
                        <a class="bds_twi" data-cmd="twi" title="分享到Twitter"></a>
                        <a class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a>
                        <a class="bds_copy" data-cmd="copy" title="分享到复制网址"></a>
                        <a class="bds_more" data-cmd="more">更多</a>
                        (<a class="bds_count" data-cmd="count" title="累计分享0次">0</a>)
                    </div>
                        <script>
                            window._bd_share_config = {
                                common: {
                                    "bdText": "",
                                    "bdMini": "2",
                                    "bdMiniList": false,
                                    "bdPic": "",
                                    "bdStyle": "0"
                                },
                                share: [{
                                    bdCustomStyle: "http://7xsqlc.com1.z0.glb.clouddn.com/css/share.css"
                                }]
                            }
                            with(document) 0[(getElementsByTagName("head")[0] || body).appendChild(createElement("script")).src = "http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=" + ~(-new Date() / 36e5)];
                        </script></div>
                        <div class="article-tags">标签：
                            <?php if(is_array($keywords)): foreach($keywords as $key=>$v): ?><a href="javascript:void(0)" ><?php echo ($v); ?></a><?php endforeach; endif; ?>
                        </div>
                    <ul class="pager clearfix">
                        <?php if(empty($prev)): else: ?>
                            <li class="previous">
                                <a title="<?php echo ($prev["name"]); ?>" href="<?php echo U('Essay/essay',array('id'=>$prev['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($prev["name"]); ?>">上一篇</a>
                            </li><?php endif; ?>
                        <?php if(empty($next)): else: ?>
                            <li class="next">
                                <a title="<?php echo ($next["name"]); ?>" href="<?php echo U('Essay/essay',array('id'=>$next['id']));?>" data-toggle="tooltip" data-original-title="<?php echo ($next["name"]); ?>">下一篇</a>
                            </li><?php endif; ?>
                    </ul>

                    <div class="relates">
                        <h3>推荐相关：</h3>
                        <ul>
                            <?php if(is_array($recommend["data"])): foreach($recommend["data"] as $key=>$v): ?><li>
                                    <a href="<?php echo U('Essay/essay',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a>
                                    <time><?php echo ($v["add_time"]); ?></time>
                                </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                </div>

                <div class="Essay-comments mtop15">
                    <!-- 畅言评论框 start -->
                    <div id="SOHUCS" sid="002<?php echo ($essay["id"]); ?>"></div>
                    <!-- 畅言评论框 end -->
                </div>
            </div>
           <div class="col-md-4 sidebar">

                <div class="widget widget-posts">
                    <h3>最新文摘</h3>
                    <ul>
                        <?php if(is_array($latest["data"])): foreach($latest["data"] as $key=>$v): ?><li class="widget-post-item">
                                <a target="_blank" href="<?php echo U('Essay/essay',array('id'=>$v['id']));?>">
                                    <div class="img-box">
                                        <?php if(!empty($v["thumb"])): ?><img class="thumb" src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" >
                                            <?php else: endif; ?>
                                    </div>
                                    <div class="info-box">
                                        <div class="info-box-inner">
                                            <span class="text font15">
                                                <?php echo ($v["name"]); ?>
                                            </span>
                                            <div class="tips">
                                                <span class="muted left"><?php echo ($v["add_time"]); ?></span>
                                                <?php if(empty($v["click"])): else: ?>
                                                <span class="muted right">阅读(<?php echo ($v["click"]); ?>)</span><?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="widget widget-posts">
                   <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-1.jpg" class="full-img"></a>
                </div>

                <div class="widget widget-posts" >
                    <a href="#" target="_blank" rel="nofollow"><img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-4.jpg" class="full-img"></a>
                </div>
           </div>
            <!--feature end-->
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
            <p class="text-center">Copyright &copy; 2017.Company name All rights reserved.<a href="<?php echo U('Index/index');?>">觅友网</a>_苏ICP备17033567号-1 - More <a href="<?php echo U('About/index');?>" target="_blank" title="关于我">-About Us</a></p>
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

<script src="/web/Public/Home/plugins/templatemo/js/jquery.magnific-popup.min.js"></script>
<script src="/web/Public/Home/plugins/templatemo/js/jquery.adjustHeightOfPage.js"></script>

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

<script src="/web/Public/Home/plugins/codemirror/codemirror.js"></script>
<script src="/web/Public/Home/plugins/codemirror/mode/javascript/javascript.js"></script>
<!-- 畅言公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
    (function(){
        var appid = 'cysUkdzlR';
        var conf = 'prod_c9d3d122ccb6b50416fb79aa1d106c49';
        var width = window.innerWidth || document.documentElement.clientWidth;
        if (width < 960) {
            window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
<!-- 畅言公共JS代码 end -->
<script type="text/javascript" src="http://assets.changyan.sohu.com/upload/plugins/plugins.count.js">
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?ced2bfdf081a8c7f45add898cecdacc2";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

    $(document).ready(function () {
        $("#Essay_index").addClass("active");

        if (!document.getElementById("code")) {
            return false;
        }
        var editor_one = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            matchBrackets: true,
            styleActiveLine: true,
            theme: "ambiance"
        });
    });


//运行文本域代码
function Preview(obj) {
    var TestWin=window.open('','',''); //打开一个窗口并赋给变量TestWin。
    TestWin.opener = null // 防止代码对论谈页面修改
    TestWin.document.write(obj.value); //向这个打开的窗口中写入代码code，这样就实现了运行代码功能。
    TestWin.document.close();
};

</script>

<!-- //演示代码渲染，syntaxhighlighter太臃肿了，放弃不用，使用layui,简洁美观 -->
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="/web/Public/Home/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="/web/Public/Home/plugins/syntaxhighlighter/styles/shCore.css"/>
<link type="text/css" rel="stylesheet" href="/web/Public/Home/plugins/syntaxhighlighter/styles/shThemeRDark.css"/>
<script type="text/javascript">
  SyntaxHighlighter.all();
</script>
</body>
</html>
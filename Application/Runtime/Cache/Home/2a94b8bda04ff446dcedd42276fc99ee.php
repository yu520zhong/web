<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="baidu-site-verification" content="2KooQz6oQx" />
    <meta name="baidu_union_verify" content="e1abcb85c53a47607d7b9f47b7a1451a">
    <title>觅友_有朋自远方来-web前端，php，javascript,jquery,记录学习生活开发的个人博客</title>
    <meta name="keywords" content="觅友，觅友网，觅友博客，觅友小站，前端，miuu，IT开发，css，css3，js，js特效，php，jquery，ajax，java">
    <meta name="description" content="觅友_有朋自远方来，分享网站开发学习以及工作和生活中的点点滴滴，希望通过此网站，与大家一起交流、成长、进步！">
    <link rel="shortcut icon" href="/miuu-websites/Public/Home/img/favicon.png">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/bootstrap.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/bootstrap-reset.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/fonts_music/fontCss.css" />

<link rel="stylesheet" href="/miuu-websites/Public/Home/iconfont/iconfont.css" />

<!--external css-->
<link rel="stylesheet" href="/miuu-websites/Public/Home/assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/assets/bxslider/jquery.bxslider.css" />

<link rel="stylesheet" href="/miuu-websites/Public/Home/assets/revolution_slider/css/rs-style.css" media="screen" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/assets/revolution_slider/rs-plugin/css/settings.css" media="screen" />

<!-- Custom styles for this template -->
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/style.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/style-responsive.css" />

<link rel="stylesheet" href="/miuu-websites/Public/Home/css/kissui.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/scrollanim.min.css" />

<link rel="stylesheet" href="/miuu-websites/Public/Home/css/swiper.min.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/animate.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/css/music.css" />
<link rel="stylesheet" href="/miuu-websites/Public/Home/plugins/layui/css/layui.css" />

<link rel="stylesheet" type="text/css" href="/miuu-websites/Public/Home/plugins/simple_calendar/css/simple-calendar.css">

    <link rel="stylesheet" type="text/css" href="/miuu-websites/Public/Home/plugins/Flickerbanner/css/flickerplate.css">
    <link rel="stylesheet" href="/miuu-websites/Public/Home/css/index.css" />
    <link rel="stylesheet" href="/miuu-websites/Public/Home/plugins/fancybox/source/jquery.fancybox.css" />
    <!-- <link rel="stylesheet" href="/miuu-websites/Public/Home/plugins/templatemo/css/templatemo-style.css" /> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
<!--[if lt IE 9]>
<script src="/miuu-websites/Public/Home/js/html5shiv.js"></script>
<script src="/miuu-websites/Public/Home/js/respond.min.js"></script>
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
                <a class="navbar-brand" href="/miuu-websites">MI<span>Uu</span></a>
                <div class="newsticker">
                    <div class="horn"><i class="miuu u-shengyin"></i></div>
                    <ul class="newsticker-list">
                        <li class="newsticker-item">
                            本站纯属虚构，雷同算我抄你。。。
                        </li>
                        <li class="newsticker-item">
                            觅友V3.0进行时，希望大家喜欢？
                        </li>
                        <li class="newsticker-item">
                            换了阿里云服务器，网站爽多了。
                        </li>
                        <li class="newsticker-item">
                            文章内容如侵权，请联系站长删除！
                        </li>
                    </ul>
                </div>
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
    <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
</header>
<!--header end-->



    <!--container start-->
    <div class="content">
        <div class="container space30">
            <div class="row">
                <!--feature start-->
                <div class="col-md-17">
                    <div class="flicker-banner">
                        <ul>
                            <li data-background="http://7xsqlc.com1.z0.glb.clouddn.com/9.jpg">
                                <a href="<?php echo U('Blog/index');?>" target="_blank">
                                    <div class="flick-title">在技术的海洋里遨游</div>
                                    <div class="flick-sub-text" data-wow-duration="1s" data-wow-delay="1s">学习是对自己最好的投资</div>
                                </a>
                            </li>
                            <li data-background="http://7xsqlc.com1.z0.glb.clouddn.com/1484646719_1832088484.jpg">
                                <a href="<?php echo U('Notes/index');?>" target="_blank">
                                    <div class="flick-title">有一些往事酒品茶香</div>
                                    <div class="flick-sub-text">聆听生活的美丽</div>
                                </a>
                            </li>
                            <li data-background="http://7xsqlc.com1.z0.glb.clouddn.com/10.jpg">
                                <a href="<?php echo U('Essay/index');?>" target="_blank">
                                    <div class="flick-title">生活之美源于发现</div>
                                    <div class="flick-sub-text">品味经典，感悟人生</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="beauty-list row">
                        <?php if(is_array($tops["data"])): foreach($tops["data"] as $key=>$v): ?><li class="top col-md-8" data-index="1">
                                <div>
                                    <div class="img-cover img-banner">
                                        <a href="<?php echo U('Blog/articles',array('id'=>$v['id']));?>" target="_blank">
                                            <img src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>">
                                            <div class="article-title">
                                                <div class="article-wrapper"><?php echo ($v["name"]); ?></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; ?>
                    </ul>
                    <section class="article">
                        <h4 class="new-article-title">
                            <span>最新文摘</span>
                            <a href="<?php echo U('Blog/index');?>">
                                <span class="more">浏览更多</span>
                            </a>
                        </h4>
                        <?php if(!empty($articles["data"])): if(is_array($articles["data"])): foreach($articles["data"] as $key=>$v): ?><article class="excerpt excerpt-text wow fadeInLeft animated animated">
                                    <div class="row">
                                        <?php if(!empty($v["thumb"])): ?><div class="col-md-8">
                                                <a href="<?php echo U('Blog/articles',array('id'=>$v['id']));?>" class="nail">
                                                    <img src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>" class="thumb">
                                                    <?php if(!empty($v["category_name"])): ?><span class="cat"><?php echo ($v["category_name"]); ?></span>
                                                        <?php else: ?>
                                                        <span class="cat">未分类</span><?php endif; ?>
                                                </a>

                                            </div>
                                            <?php else: endif; ?>
                                        <header class="col-md-16">
                                            <div class="excerpt-content">
                                                <h2 class="title">
                                                    <a href="<?php echo U('Blog/articles',array('id'=>$v['id']));?>" target="_blank" title="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a>
                                                </h2>
                                                <ul class="meta list-inline">
                                                    <li>
                                                        <i class="miuu u-rili"></i> <?php echo ($v["add_time"]); ?></li>
                                                    <li class="writer">
                                                        <i class="miuu u-yonghu"></i> <?php echo ($v["author"]); ?></li>
                                                    <li class="pv">
                                                        <i class="miuu u-eyes"></i> 阅读(<?php echo ($v["click"]); ?>)</li>
                                                </ul>
                                                <p class="note"><?php echo ($v["desc"]); ?></p>
                                            </div>

                                        </header>
                                    </div>
                                </article><?php endforeach; endif; endif; ?>
                    </section>
                    <nav class="text-center">
                        <div class="pagination"><?php echo ($articles["pagelist"]); ?></div>
                    </nav>
                </div>
                <div class="col-md-7 sidebar">
                    <div class="widget widget-posts">
                        <div class="about-testimonial boxed-style about-flexslider ">
                            <section class="slider">
                                <div class="flexslider">
                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                        <ul class="slides about-flex-slides">
                                            <div class="flex-active-slide" style="float: left; display: block;">
                                                <div class="about-testimonial-image about-circle">
                                                    <img alt="" src="http://7xsqlc.com1.z0.glb.clouddn.com/1494899853_910859139.jpg">
                                                </div>
                                                <a class="about-testimonial-author" href="#">Miuu</a>
                                                <span class="about-testimonial-company">暮色</span>
                                                <div class="about-testimonial-content">
                                                    <p class="about-testimonial-quote">
                                                        没有新的衣服能让你爱恋，总有一种天气让我怀念
                                                        <br/>醒来或者吃饱又是一年，相遇然后分别就在一天！
                                                        <br/>——李志《热河》
                                                    </p>
                                                </div>
                                            </div>
                            </section>
                            </div>
                            <div class="share-single share-index">
                                <div class="action-share bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1473947264016">
                                    <div class="share-dot">
                                        <p>
                                            <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                                        </p>
                                    </div>
                                    <div class="share-dot">
                                        <p>
                                            <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                                        </p>
                                    </div>
                                    <div class="share-dot">
                                        <p>
                                            <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                                        </p>
                                    </div>
                                    <div class="share-dot">
                                        <p>
                                            <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                                        </p>
                                    </div>
                                    <div class="share-dot">
                                        <p>
                                            <a class="bds_mail" data-cmd="mail" title="分享到邮件分享"></a>
                                        </p>
                                    </div>
                                </div>
                                <p class="share-dot-text font13">欢迎关注我的小站!</p>
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
                                    with(document) 0[(getElementsByTagName("head")[0] || body).appendChild(
                                            createElement("script")).src =
                                        "http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=" + ~(-new Date() /
                                            36e5)];
                                </script>
                            </div>
                            </div>
                            <div class="widget widget-posts clearfix">
                                <div id="calendar"></div>
                            </div>
                            

                            <div class="widget widget-posts">
                                <div class="about-carousel">
                                    <div id="myCarousel" class="carousel slide">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <?php if(is_array($essay)): $i = 0; $__LIST__ = $essay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($key == 0): ?><div class="item active">
                                                        <?php else: ?>
                                                        <div class="item"><?php endif; ?>
                                                <a href="<?php echo U('Essay/essay',array('id'=>$v['id']));?>" target="_blank">
                                                    <img src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>">
                                                </a>
                                                <div class="carousel-caption">
                                                    <p><?php echo ($v["name"]); ?></p>
                                                </div>
                                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                            <!-- Carousel nav -->
                                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                                <i class="icon-angle-left"></i>
                                            </a>
                                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                                <i class="icon-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="widget widget-posts blog-side-item">
                                    <div class="tags">
                                        <h3>热门标签</h3>
                                        <ul class="list-unstyled tag">
                                            <li>
                                                <a href="#">jQuery</a>
                                            </li>
                                            <li>
                                                <a href="#">React</a>
                                            </li>
                                            <li>
                                                <a href="#">前端</a>
                                            </li>
                                            <li>
                                                <a href="#">JS</a>
                                            </li>
                                            <li>
                                                <a href="#">UI</a>
                                            </li>
                                            <li>
                                                <a href="#">css</a>
                                            </li>
                                            <li>
                                                <a href="#">Sublime text</a>
                                            </li>
                                            <li>
                                                <a href="#">Web</a>
                                            </li>
                                            <li>
                                                <a href="#">php</a>
                                            </li>
                                            <li>
                                                <a href="#">命令行</a>
                                            </li>
                                            <li>
                                                <a href="#">Java</a>
                                            </li>
                                            <li>
                                                <a href="#">Git</a>
                                            </li>
                                            <li>
                                                <a href="#">匿名函数</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget widget-posts">
                                    <h3>我在路上</h3>
                                    <ul>
                                        <?php if(is_array($notes)): foreach($notes as $key=>$v): ?><li class="widget-post-item">
                                                <a target="_blank" href="<?php echo U('Notes/notes',array('id'=>$v['id']));?>">
                                                    <div class="img-box">
                                                        <?php if(!empty($v["thumb"])): ?><img class="thumb" src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["name"]); ?>">
                                                            <?php else: endif; ?>
                                                    </div>
                                                    <div class="info-box">
                                                        <div class="info-box-inner">
                                                            <span class="text font15">
                                                                <?php echo ($v["name"]); ?>
                                                            </span>
                                                            <div class="tips">
                                                                <span class="muted left"><?php echo ($v["add_time"]); ?></span>
                                                                <span class="muted right">阅读(<?php echo ($v["click"]); ?>)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><?php endforeach; endif; ?>
                                    </ul>
                                </div>
                                <div class="widget widget-posts">
                                    <section class="panel tab widget-tab">
                                        <header class="panel-heading tab-bg-dark-navy-blue">
                                            <ul class="nav nav-tabs nav-justified widget-nav">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#events">
                                                        热门软件
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#news">
                                                        每日一笑
                                                    </a>
                                                </li>
                                            </ul>
                                        </header>
                                        <div class="panel-body">
                                            <div class="tab-content tasi-tab">
                                                <div id="events" class="tab-pane active">
                                                    <article class="media">
                                                        <ul class="beauty-list">
                                                            <?php if(is_array($down["data"])): $i = 0; $__LIST__ = $down["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="top">
                                                                    <div class="img-left-cover">
                                                                        <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" target="_blank">
                                                                            <span><?php echo ($i); ?></span>
                                                                            <?php if(empty($v["thumb"])): ?><img src="http://7xsqlc.com1.z0.glb.clouddn.com/default.jpg" alt="">
                                                                                <?php else: ?>
                                                                                <img src="<?php echo ($v["thumb"]); ?>" class="img-responsive" alt="<?php echo ($v["name"]); ?>"><?php endif; ?>
                                                                        </a>
                                                                    </div>
                                                                    <div class="right-article">
                                                                        <h4>
                                                                            <a href="<?php echo U('Down/down',array('id'=>$v['id']));?>" target="_blank"><?php echo ($v["name"]); ?></a>
                                                                        </h4>
                                                                        <div class="time_about" title="2017-04-27 11:23">
                                                                            <span>下载（<?php echo ($v["click"]); ?>）</span>
                                                                        </div>
                                                                    </div>
                                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </ul>
                                                    </article>
                                                </div>
                                                <div id="news" class="tab-pane">
                                                    <?php if(is_array($result["data"])): $i = 0; $__LIST__ = $result["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><article class="media">
                                                            <a href="<?php echo ($v["url"]); ?>" href="<?php echo ($v["url"]); ?>" class="fancybox pull-left thumb p-thumb">
                                                                <img src="<?php echo ($v["url"]); ?>" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                                <p>
                                                                    <a href="<?php echo ($v["url"]); ?>" class="cmt-head fancybox"><?php echo ($v["content"]); ?></a>
                                                                </p>
                                                                <p>
                                                                    <i class="icon-time"></i> <?php echo ($v["updatetime"]); ?></p>
                                                            </div>
                                                        </article><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                
                                <div class="widget widget-posts">
                                    <div class="widget-banner">
                                        <a href="#" target="_blank" rel="nofollow">
                                            <img src="http://7xsqlc.com1.z0.glb.clouddn.com/banner/small-4.jpg" class="full-img">
                                        </a>
                                    </div>
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
            <div class="search-index">
                <div>
                    <input type="text" id="word" placeholder="搜索从这里开始..." autocomplete="off">
                    <button type="submit" id="home"></button>
                    <ul id="list"></ul>
                </div>
            </div>
            <ul class="links list-inline">
                <li><a href="http://lusongsong.com/" target="_blank">卢松松</a></li>
                <li><a href="http://www.ishishang.top/" target="_blank">爱时尚</a></li>
                <li><a href="http://www.taiyangxiao.com/" target="_blank">太阳笑了</a></li>
                <li><a href="http://layer.layui.com/" target="_blank">LayUI</a></li>
                <li><a href="http://themebetter.com/" target="_blank">themebetter</a></li>
                <li><a href="http://themebetter.com/" target="_blank">ThinkPHP</a></li>
                <li><a href="http://blog.miuu.club/" target="_blank">觅友个人博客</a></li>
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
                <iframe src="//www.seniverse.com/weather/weather.aspx?uid=U1E8D42C92&cid=CHBJ000000&l=zh-CHS&p=SMART&a=1&u=C&s=4&m=2&x=0&d=3&fc=C6C6C6&bgc=&bc=&ti=0&in=0&li=" frameborder="0" scrolling="no" width="300" height="27" allowTransparency="true"></iframe>
            </p>
            <div class="music-bg" id="music-bg">
            </div>
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
<script src="/miuu-websites/Public/Home/js/jquery.js"></script>
<script src="/miuu-websites/Public/Home/js/bootstrap.min.js"></script>
<script src="/miuu-websites/Public/Home/js/hover-dropdown.js"></script>
<script src="/miuu-websites/Public/Home/js/common.js"></script>
<script src="/miuu-websites/Public/Home/js/main-scripts.js"></script>
<script src="/miuu-websites/Public/Home/js/scrollanim.min.js"></script>
<script src="/miuu-websites/Public/Home/js/music.js"></script>
<script src="/miuu-websites/Public/Home/js/jquery.newsticker.js"></script>
<script src="/miuu-websites/Public/Home/js/wow.min.js"></script>



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
    'MODULE' : '/miuu-websites/Home',
    'ROOT' : '/miuu-websites',
    'IMG' : '/miuu-websites/Public/<?php echo MODULE_NAME;?>/img',
    'FACE' : '/miuu-websites/Public/<?php echo MODULE_NAME;?>/face',
    'PLUGINS' : '/miuu-websites/Public/<?php echo MODULE_NAME;?>/plugins',
    'JS' : '/miuu-websites/Public/Home/js',
    'UPLOADIFY' : '/miuu-websites/Public/Home/uploadify',
    'UPLOADER' : '<?php echo U("File/upload");?>',
    'INDEX' : '<?php echo U("Index/index");?>',
    'SEARCH' : '<?php echo U("Home/Other/search");?>',
};
</script>
<script type="text/javascript" src="/miuu-websites/Public/Home/plugins/layui/layui.js"></script>
<script type="text/javascript" src="/miuu-websites/Public/Home/plugins/layui/lay/dest/layui.all.js"></script>

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

                <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script src="/miuu-websites/Public/Home/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
                
                <script src="/miuu-websites/Public/Home/plugins/simple_calendar/js/simple-calendar-es6.js"></script>
                <script src="/miuu-websites/Public/Home/plugins/simple_calendar/js/simple-calendar-options.js"></script>

                <script src="/miuu-websites/Public/Home/plugins/Flickerbanner/js/modernizr-custom-v2.7.1.min.js"></script>
                <script src="/miuu-websites/Public/Home/plugins/Flickerbanner/js/jquery-finger-v0.1.0.min.js"></script>
                <script src="/miuu-websites/Public/Home/plugins/Flickerbanner/js/flickerplate.min.js"></script>

                <script src="/miuu-websites/Public/Home/plugins/templatemo/js/jquery.magnific-popup.min.js"></script>
                <script src="/miuu-websites/Public/Home/plugins/templatemo/js/jquery.adjustHeightOfPage.js"></script>

                <script src="/miuu-websites/Public/Home/js/search.js"></script>

                <script>
                    jQuery(".fancybox").fancybox();
                    $("#Index_index").addClass("active"); { /*Flickerplate轮播*/ }
                    $('.flicker-banner').flicker({
                        arrows: true,
                        arrows_constraint: false,
                        auto_flick: true,
                        auto_flick_delay: 10,
                        block_text: true,
                        dot_navigation: true,
                        dot_alignment: 'center',
                        flick_animation: 'transition-slide',
                        flick_position: 1,
                        inner_width: false,
                        theme: 'dark'
                    });

                    $(function () {
                        $('.widget-nav a').hover(function () {
                            $(this).tab('show');
                        });
                    })


                    {
                        /*
                            //微信端判断，提示使用浏览器打开
                            $(window).on("load",function(){
                                var winHeight = $(window).height();
                                function is_weixin() {
                                    var ua = navigator.userAgent.toLowerCase();
                                    if (ua.match(/MicroMessenger/i) == "micromessenger") {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                                var isWeixin = is_weixin();
                                if(isWeixin){
                                    $(".weixin-tip").css("height",winHeight);
                                    $(".weixin-tip").show();
                                }
                            })
                            */
                    }
                </script>



</body>

</html>
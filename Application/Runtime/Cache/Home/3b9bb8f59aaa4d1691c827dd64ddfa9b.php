<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="baidu-site-verification" content="UcNs3IHDX2" />
<title>关于我_觅友</title>
<meta name="keywords" content="觅友，觅友网，觅友博客，觅友小站，前端，miuu,IT开发，css，css3，js，js特效，php，jquery，ajax，java">
<meta name="description" content="觅友,将来的你,一定会感谢现在拼命的自己！">
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

<link rel="stylesheet" href="/web/Public/Home/plugins/resume/css/about.css">
<link rel="stylesheet" href="/web/Public/Home/plugins/resume/css/work.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="/web/Public/Home/plugins/resume/css/owl.carousel.min.css">
<link rel="stylesheet" href="/web/Public/Home/plugins/resume/css/owl.theme.default.min.css">
<!-- Theme Style -->
<link rel="stylesheet" href="/web/Public/Home/plugins/resume/css/hero.css">
<link rel="stylesheet" href="/web/Public/Home/plugins/templatemo/css/templatemo-style.css" />
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

    <aside id="fh5co-hero" style="background-image: url(/web/Public/Home/plugins/resume/img/hero4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fh5co-hero-wrap">
                        <div class="fh5co-hero-intro">
                            <h2>
                                future you must thank to the present hard working one
                                <span>
                                </span>
                            </h2>
                            <h1>
                                将来的你，一定会感谢现在拼命的自己！
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div id="fh5co-main" class="content">
        <!-- content-block -->
        <div class="content-block text-center" id="about">
            <div class="block-content text-center">
                <div class="container">
                    <div class="ch-grid about-circle">
                        <div class="ch-item ch-img-1  wow bounceInDown animated">
                            <div class="ch-info">
                                <h4>
                                    MIUu<br>29
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
                <div class="work" id="portfolio">
                    <header class="block-heading cleafix text-center">
                        <h2>
                            案例精选<em>/Cases</em>
                        </h2>
                        <h2>
                    </header>
                    <div class="products-bottom">
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.aibbk.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img1.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    背包客户外网
                                                </h4>
                                                <p>以集交友互动、电商购物于一体的户外互动交流平台,致力于推动户外运动，做中国最优秀的户外门户网站。</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.chengmei.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img2.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    上海诚美
                                                </h4>
                                                <p>
                                                    一家覆盖了药妆、美妆和互联网渠道，成为多品牌、多渠道经营的化妆品集团企业。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://aiduitu.com/test/index.html" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img3.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    背包客手机站
                                                </h4>
                                                <p>
                                                    背包客手机网站，集互动、组队、交友为一体的户外手机网站
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://zhi.aibbk.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img4.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    陟·拓展
                                                </h4>
                                                <p>
                                                    致力于开发国内外精品户外线路及拓展训练课程，帮助各类型企业打造一支支高绩效团队。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.sdcianet.com" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img5.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    山东省涂料行业协会
                                                </h4>
                                                <p>
                                                    山东省涂料行业协会展示网站
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.51shangyi.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img6.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    上医网
                                                </h4>
                                                <p>成立于2014年，是一个专注于中医的创业团队，致力于服务所有有疗效的中医、中医机构</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                               <a href="https://www.lu.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img7.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    陆金所
                                                </h4>
                                                <p>
                                                    之前团队做的一个网站，现已改版
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.licron.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img8.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    礼众信息
                                                </h4>
                                                <p>
                                                    一家专注于开发网站外包项目的公司，主要业务包括企业站、行业站及手机端电商网站等开发服务。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6 work-grid">
                            <div class="view view-tenth">
                                <a href="http://www.ys-capital.com/" class="boxer">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="/web/Public/Home/plugins/resume/img/case/img9.jpg" class="img-responsive of-my" alt="" />
                                            <div class="mask">
                                                <h4>
                                                    银树资本
                                                </h4>
                                                <p>
                                                    专业从事股权投资管理、企业资产管理、境内外上市或并购财务顾问、投融资顾问、私人财富管理。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-bann">
            <div class="container">
                <h3>
                    人的知识就好比一个圆圈
                </h3>
                <p class="col-sm-8 col-sm-offset-2">
                    『 人的知识就好比一个圆圈，圆圈里面是已知的，圆圈外面是未知的。你知道得越多，圆圈也就越大，你不知道的也就越多。 』
                </p>
            </div>
        </div>
        <div class="content-block text-center" id="skill">
            <header class="block-heading cleafix">
                <h2>
                    专业技能<em>/SPECIAL SkillS</em>
                </h2>
            </header>
            <div class="block-content text-center">
                <div class="container">
                    <div class="col-sm-3 col-xs-6 skill_item wow zoomIn animated ">
                        <img src="/web/Public/Home/plugins/resume/img/html.png" alt="">
                        <h3>
                            HTML5/CSS3
                        </h3>
                    </div>
                    <div class="col-sm-3 col-xs-6 skill_item wow zoomIn animated">
                        <img src="/web/Public/Home/plugins/resume/img/css.png" alt="">
                        <h3>
                            SCSS
                        </h3>
                    </div>
                    <div class="col-sm-3 col-xs-6 skill_item wow zoomIn animated">
                        <img src="/web/Public/Home/plugins/resume/img/js.png" alt="">
                        <h3>
                            JS/jQuery
                        </h3>
                    </div>
                    <div class="col-sm-3 col-xs-6 skill_item zoomIn wow animated">
                        <img src="/web/Public/Home/plugins/resume/img/node.png" alt="">
                        <h3>
                            React/Redux
                        </h3>
                    </div>
                </div>
            </div>
            <div class="ibox-content container text-left">
                <div class="col-sm-4">
                    <h5>
                        HTML5/CSS3
                    </h5>
                    <div class="progress">
                        <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="35"
                        role="progressbar" class="progress-bar progress-bar-success">
                            <span class="sr-only">
                                35% Complete (success)
                            </span>
                        </div>
                    </div>
                    <h5>
                        JS/jQuery
                    </h5>
                    <div class="progress progress-bar-default">
                        <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43"
                        role="progressbar" class="progress-bar">
                            <span class="sr-only">
                                43% Complete (success)
                            </span>
                        </div>
                    </div>
                    <h5>
                        Bootstrap/Sass
                    </h5>
                    <div class="progress progress-striped active">
                        <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75"
                        role="progressbar" class="progress-bar progress-bar-danger">
                            <span class="sr-only">
                                40% Complete (success)
                            </span>
                        </div>
                    </div>
                    <h5>
                        PHP/THINKPHP
                    </h5>
                    <div class="progress progress-striped active">
                        <div style="width: 62%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                        role="progressbar" class="progress-bar progress-bar-warning">
                            <span class="sr-only">
                                40% Complete (success)
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <ol class="skill_info">
                        <li>
                            熟练掌握HTML和CSS，熟练手写符合 W3C 标准的结构和代码。
                        </li>
                        <li>
                            对可用性、可访问性、前端性能优化、最优实践等有一定的了解和实践,熟练掌握 HTML5 和 CSS3。
                        </li>
                        <li>
                            熟练掌握 sublime text、notepad++、Sass、Git、SVN 等等前端开发和团队协作工具。
                        </li>
                        <li>
                            熟练掌握 jQuery，实现日常需要的交互效果,了解 Ajax 工作原理和实现方法。
                        </li>
                        <li>
                            熟练掌握BootStrap,实现自适应网页开发。
                        </li>
                        <li>
                            了解手机前端开发jquerymobile，swipper等,熟练掌握React/Redux.js。
                        </li>
                        <li>
                            掌握PHP后端知识，可以使用ThinkPHP框架进行中小型网站、企业站、行业站开发。
                        </li>
                        <li>
                            喜欢接触新事物，有一定的自学能力。
                        </li>
                        <a href="#experience" class="btn btn-default mt15">
                        更多了解
                    </a>
                    </ol>

                </div>
            </div>
        </div>
        <div id="services" class="content-block">
            <div id="numbers" class="parallax">
                <div class="overlay">
                    <div class="container-fluid container">
                        <!-- number list -->
                        <ul class="numbersList">
                            <li class="col-md-3 col-sm-4 col-xs-6">
                                <h4>
                                    技术文摘
                                </h4>
                                <span id="number1" class="count1 count-timer">
                                    <?php echo ($list4); ?>
                                </span>
                            </li>
                            <li class="col-md-3 col-sm-4 col-xs-6">
                                <h4>
                                    常用软件
                                </h4>
                                <span id="number2" class="count2">
                                    <?php echo ($list3); ?>
                                </span>
                            </li>
                            <li class="col-md-3 col-sm-4 col-xs-6">
                                <h4>
                                    我在路上
                                </h4>
                                <span id="number4" class="count3">
                                    <?php echo ($list1); ?>
                                </span>
                            </li>
                            <li class="col-md-3 col-sm-4 col-xs-6">
                                <h4>
                                    美文分享
                                </h4>
                                <span id="number4" class="count4">
                                    <?php echo ($list2); ?>
                                </span>
                            </li>
                        </ul>
                        <!-- numbersList end -->
                    </div>
                    <!-- container-fluid end -->
                </div>
                <!-- overlay end -->
            </div>
        </div>
         <section id="experience">
            <div class="container">
                <div class="row">
                    <header class="block-heading text-center cleafix">
                        <h2>
                            我的经历<em>/My Experiences</em>
                        </h2>
                    </header>
                    <div class="col-md-12">
                        <div class="owl-carousel-fullwidth owl-carousel-2">

                            <div class="item">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-img">
                                    <img src="/web/Public/Home/plugins/resume/img/owl1.png" alt="Images" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-text">
                                    <h2>
                                        上海鸿与智展览服务有限公司
                                        <span class="fh5co-border">
                                        </span>
                                    </h2>
                                    <h4>
                                        2012/10~2013/12
                                    </h4>
                                    <p>
                                        <span>
                                            <i class="fa fa-star-half-full">
                                            </i>
                                            网站美工/设计
                                        </span>
                                        <ol>
                                            <li>
                                                根据公司需要制作网站页面,网站banner设计及更新，并协助网站前端工程师对产品展示页面切图，并负责官网杂志、展会活动信息发布及日常维护；
                                            </li>
                                            <li>
                                                进行简单的页面兼容调试，期间自学前端布局标准解决方案；
                                            </li>
                                            <li>
                                                开始了解到web前端这门技术，学习优秀的前端作品；
                                            </li>
                                            <li>
                                                公司官网：
                                                <a href="http://www.crtschina.com" target="_blank">
                                                    http://www.crtschina.com/
                                                </a>
                                            </li>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-img">
                                    <img src="/web/Public/Home/plugins/resume/img/macbook_3.png" alt="Images" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-text">
                                    <h2>
                                        上海礼众信息技术有限公司
                                        <span class="fh5co-border">
                                        </span>
                                    </h2>
                                    <h4>
                                        2013/12~2014/11
                                    </h4>
                                    <p>
                                        <span>
                                            <i class="fa fa-star-half-full">
                                            </i>
                                            网站前端
                                        </span>
                                        <ol>
                                            <li>
                                                负责网站外包项目前端开发，网站内容结构优化更改及浏览器兼容性调试；
                                            </li>
                                            <li>
                                                开始接触PHP后台开发，与PHP工程师进行前后端项目对接；
                                            </li>
                                            <li>
                                                工作之余开始学习并掌握CSS预处理器SASS的使用方法，了解了主流的前端架构（Bootstrap）和协调工作解决方案（svn）等
                                            </li>
                                            <li>
                                                公司官网：
                                                <a href="http://www.licron.com" target="_blank">
                                                    http://www.licron.com
                                                </a>
                                            </li>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-img">
                                    <img src="/web/Public/Home/plugins/resume/img/macbook_3.png" alt="Images" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-text">
                                    <h2>
                                        上海背包客户外网（电商+SNS）
                                    </h2>
                                    <h4>
                                        2014/11~2016/6
                                    </h4>
                                    <p>
                                        <span>
                                            <i class="fa fa-star-half-full">
                                            </i>
                                            网站前端
                                        </span>
                                        <ol>
                                            <li>
                                                负责背包客户外商城网站前端开发，与设计部沟通网站页面的布局，与产品部沟通产品实现解决方案，与后台PHP协定数据接口（json），前端合并、发布、测试、版本管理方案（SVN）；
                                            </li>
                                            <li>
                                                负责背包客手机HTML5页面开发，运用jQuery,swiper等前端框架技术；
                                            </li>
                                            <li>
                                                期间，利用闲余时间学习PHP、mysql，对PHP后台技术有了更深入的了解和学习，完善了PHP与前端的协同开发；
                                            </li>
                                            <li>
                                                利用业余时间，后台运用ThinkPHP+MySQL，前端采用Bootstrap+jQuery+ajax+swiper等技术制作响应式交互型个人技术博客。
                                            </li>
                                            <li>
                                                公司官网：
                                                <a href="http://www.aibbk.com/" target="_blank">
                                                    http://www.aibbk.com/
                                                </a>
                                            </li>
                                        </ol>
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-img">
                                    <img src="/web/Public/Home/plugins/resume/img/macbook_3.png" alt="Images" class="img-responsive">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-text">
                                    <h2>
                                        上海中原地产网
                                    </h2>
                                    <h4>
                                        2016/6~2018/6
                                    </h4>
                                    <p>
                                        <span>
                                            <i class="fa fa-star-half-full">
                                            </i>
                                            前端工程师
                                        </span>
                                        <ol>
                                            <li>
                                                负责誉萃系统网站前端开发，与设计沟通网站页面的布局，与产品部沟通产品实现解决方案，实现前端模块化管理，siteMesh\require.js；
                                            </li>
                                            <li>
                                                负责背包客手机HTML5页面开发，运用jQuery,swiper等前端框架技术；require.js对js模块化管理；
                                            </li>
                                            <li>
                                                期间，对大型商城和社区的需求和大型网站的架构进行总结分析，完善了对大网站开发的认知，积累了经验；
                                            </li>
                                            <li>
                                                公司官网：
                                                <a href="http://sh.centanet.com/" target="_blank">
                                                    http://sh.centanet.com/
                                                </a>
                                            </li>
                                        </ol>
                                    </p>
                                </div>
                            </div>

                            <!-- END .item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

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


<!-- Owl carousel -->
<script src="/web/Public/Home/plugins/resume/js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="/web/Public/Home/plugins/resume/js/jquery.magnific-popup.min.js"></script>
<!-- Superfish -->
<script src="/web/Public/Home/plugins/resume/js/superfish.js"></script>
<!-- Easy Responsive Tabs -->
<script src="/web/Public/Home/plugins/resume/js/easyResponsiveTabs.js"></script>
<!-- FastClick for Mobile/Tablets -->
<!-- Main JS -->
<script src="/web/Public/Home/plugins/resume/js/menu.js"></script>
<script src="/web/Public/Home/plugins/templatemo/js/jquery.magnific-popup.min.js"></script>
<script src="/web/Public/Home/plugins/templatemo/js/jquery.adjustHeightOfPage.js"></script>
<!-- timer isonscreen -->
<script src="/web/Public/Home/plugins/resume/js/jquery.isonscreen.js"></script>
<script src="/web/Public/Home/plugins/resume/js/timercount.js"></script>
<script>
    $("#About_index").addClass("active");
</script>

</body>
</html>
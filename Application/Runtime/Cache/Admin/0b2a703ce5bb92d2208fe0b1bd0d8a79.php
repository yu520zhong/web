<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>博客列表-米鱼博客</title>

    <meta name="keywords" content="个人博客，米鱼博客，网站开发，学习分享，CSS，js，jquery，PHP，MIUU博客">
    <meta name="description" content="米鱼（Miuu）个人博客，一个基于web前端的程序员个人网站，关注于互联网网站开发技术和行业最新资讯，希望与大家一起学习交流。">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/web/Public/Admin/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="/web/Public/Admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="/web/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/web/Public/Admin/css/style.min.css" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/web/Public/Admin/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo ($admin_name); ?></strong><b class="caret"></b></span>
                                <span class="text-muted text-xs block">超级管理员</span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="form_avatar.html">修改头像</a>
                                </li>
                                <li><a class="J_menuItem" href="profile.html">个人资料</a>
                                </li>
                                <li><a class="J_menuItem" href="contacts.html">联系我们</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo U('Login/logout');?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/index');?>">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span class="nav-label">技术文摘</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Articles/add');?>">文摘添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Articles/index');?>">文摘列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categoryart/add');?>">文摘分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categoryart/index');?>">文摘分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pencil"></i>
                            <span class="nav-label">我的博客</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Notes/add');?>">博客添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Notes/index');?>">博客列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynote/add');?>">博客分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynote/index');?>">博客分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitch"></i>
                            <span class="nav-label">资源下载</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Down/add');?>">资源添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Down/index');?>">资源列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorydown/add');?>">资源分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorydown/index');?>">资源分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitch"></i>
                            <span class="nav-label">段子</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/add');?>">段子添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('News/index');?>">段子列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynews/add');?>">段子分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynews/index');?>">段子分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitch"></i>
                            <span class="nav-label">美文</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Essay/add');?>">美文添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Essay/index');?>">美文列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categoryessay/add');?>">美文分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categoryessay/index');?>">美文分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-link"></i>
                            <span class="nav-label">常用导航</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Navs/add');?>">导航添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Navs/index');?>">导航列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynavs/add');?>">导航分类添加</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="<?php echo U('Categorynavs/index');?>">导航分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graph_echarts.html">商品添加</a>
                            </li>
                            <li><a href="graph_flot.html">商品列表</a>
                            </li>
                            <li><a href="graph_morris.html">商品分类添加</a>
                            </li>
                            <li><a href="graph_rickshaw.html">商品分类列表</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo U('Recycle/index');?>">
                            <i class="fa fa-trash"></i>
                            <span class="nav-label">回收站</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-group"></i>
                            <span class="nav-label">会员管理</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="hidden-xs">
                            <a href="/web" class="J_menuItem" data-index="0"><i class="fa fa-desktop"></i> 回到前端首页</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row  border-bottom  dashboard-header min-ht-550">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>文摘列表</h5>
                            <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="top-button">
                                <h5>选择文摘分类：</h5><select id="category" class="form-control">
                                    <option value="-1" >全部</option>
                                    <option value="0" <?php if(($cid) == "0"): ?>selected<?php endif; ?>>未分类</option>
                                    <?php if(is_array($categoryart)): foreach($categoryart as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if(($v["id"]) == $cid): ?>selected<?php endif; ?>><?php echo str_repeat('— ',$v['level']); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                                </select>
                                <div><h4>
                                <a href="<?php echo U('Articles/add',array('cid'=>$cid));?>" class="light">添加博客</a>
                                <a href="<?php echo U('Categoryart/add');?>">添加分类</a>
                                </h4></div>
                            </div>
                            <div class="list full">
                                <table class="table">
                                    <tr><th>ID</th><th class="t1">博客分类</th><th>博客名称</th><th>来源</th><th>链接</th><th >发布日期</th><th >上架</th><th>推荐</th><th>操作</th></tr>
                                    <?php if(is_array($articles["data"])): foreach($articles["data"] as $key=>$v): ?><tr>
                                        <td><?php echo ($v["id"]); ?></td>
                                        <td class="t1">
                                            <?php if(empty($v["category_id"])): ?><a href="<?php echo U('Articles/index','cid=0');?>">未分类</a>
                                            <?php else: ?>
                                                <a href="<?php echo U('Articles/index',array('cid'=>$v['category_id']));?>"><?php echo ($v["categoryart_name"]); ?></a><?php endif; ?>
                                        </td>
                                        <td><?php echo ($v["name"]); ?></td><td><?php echo ($v["source"]); ?></td><td><?php echo ($v["url"]); ?></td><td><?php echo ($v["add_time"]); ?></td>
                                        <td><a href="#" class="act-onsale" data-id="<?php echo ($v["id"]); ?>" data-status="<?php echo ($v["on_sale"]); ?>"><?php if(($v["on_sale"]) == "yes"): ?>是<?php else: ?>否<?php endif; ?></a></td>
                                        <td><a href="#" class="act-recommend" data-id="<?php echo ($v["id"]); ?>" data-status="<?php echo ($v["recommend"]); ?>"><?php if(($v["recommend"]) == "yes"): ?>是<?php else: ?>否<?php endif; ?></a></td><td>
                                        <a href="<?php echo U('Articles/edit',array('id'=>$v['id'],'cid'=>$v['category_id'],'p'=>$p));?>">修改</a>　<a href="#" class="act-del" data-id="<?php echo ($v["id"]); ?>">删除</a></td></tr><?php endforeach; endif; ?>
                                </table>
                            </div>
                            <div class="pagelist"><?php echo ($articles["pagelist"]); ?></div>
                        </div>
                    </div>
                </div>
                <form method="post" id="form">
                    <input type="hidden" name="id" id="target_id">
                    <input type="hidden" name="field" id="target_field">
                    <input type="hidden" name="status" id="target_status">
                </form>
            </div>
            <div class="footer">
                <div class="pull-left"><strong>现在时刻: </strong><span id="TimeShow"></span>
                </div>
                <div class="pull-right">&copy; 2015-2016 <a href="/web" target="_blank">MacUu's blog</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--右侧边栏结束-->

    </div>
    
	<script src="/web/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
	<script src="/web/Public/Admin/js/bootstrap.min.js?v=3.3.6"></script>
	<script src="/web/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="/web/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/web/Public/Admin/js/plugins/layer/layer.min.js"></script>
	<script src="/web/Public/Admin/js/hplus.min.js?v=4.1.0"></script>
	<script src="/web/Public/Admin/js/plugins/pace/pace.min.js"></script>
	<script src="/web/Public/Admin/js/newmend.js"></script>
    <script>
        //下拉菜单跳转
        $("#category").change(function(){
            var url = "<?php echo U('Articles/index',array('cid'=>'_ID_'));?>";
            location.href = url.replace("_ID_",$(this).val());
        });
        //快捷操作
        function change_status(obj,field){
            $("#target_id").val(obj.attr("data-id"));
            $("#target_field").attr("value",field)
            $("#target_status").attr("value",(obj.attr("data-status")=="yes") ? "no" : "yes");
            $("#form").attr("action","<?php echo U('Articles/change',array('p'=>$p,'cid'=>$cid));?>").submit();
        }
        //快捷操作-推荐
        $(".act-recommend").click(function(){
            change_status($(this),'recommend');
        });
        //快捷操作-上架
        $(".act-onsale").click(function(){
            change_status($(this),'on_sale');
        });
        //快捷操作-删除
        $(".act-del").click(function(){
            if(confirm('确定要删除吗？')){
                $("#target_id").val($(this).attr("data-id"));
                $("#form").attr("action","<?php echo U('Articles/del',array('p'=>$p,'cid'=>$cid));?>").submit();
            }
        });
    </script>
</body>

</html>
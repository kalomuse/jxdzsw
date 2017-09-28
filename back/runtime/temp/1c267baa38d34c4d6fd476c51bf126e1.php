<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/index/index.html";i:1506294276;s:64:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/layout.html";i:1506294276;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/head.html";i:1506294276;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/header.html";i:1506294276;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/menu.html";i:1506294276;s:68:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/nav.html";i:1506294276;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/footer.html";i:1506294276;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> 洗呗 </title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="/public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/public/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/public/css/animate.css" rel="stylesheet">
    <link href="/public/css/style.css?v=4.1.1" rel="stylesheet">
    <style>
        .wrapper {
            background: white;
        }
        .jqGrid_wrapper {
            overflow: hidden;
            border: 1px solid #F5F5F5;
            background: white;
        }

    </style>
    <script src="/public/js/jquery.min.js?v=2.1.4"></script>
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="nav-close"><i class="fa fa-times-circle"></i>
    </div>
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs" style="font-size:20px;">
                                <i class="fa fa-area-chart"></i>
                                <strong class="font-bold">后台管理系统</strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">后台管理系统
                </div>
            </li>
            <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                <span class="ng-scope">管理</span>
            </li>
            <!--<li>
                <a class="J_menuItem" href="index_v1.html">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">品类管理</span>
                </a>
            </li>-->

            <li>
                <a href="/admin/machine"><i class="fa fa-edit"></i> <span class="nav-label">机器管理</span></a>
            </li>
            <li>
                <a href="/admin/server"><i class="fa fa-edit"></i> <span class="nav-label">服务管理</span></a>
            </li>


        </ul>
    </div>
</nav>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>
                <!--<form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                    </div>

                </form>-->

            </div>
            <div style="float:right;font-size: 15px;font-weight:900;line-height: 50px; margin-right: 40px;"><a href="/index/user/logout">注 销</a></div>
            <!--<ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li class="m-t-xs">
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46小时前</small>
                                    <strong>小四</strong> 是不是只有我死了,你们才不骂爵迹
                                    <br>
                                    <small class="text-muted">3天前 2014.11.8</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">25小时前</small>
                                    <strong>二愣子</strong> 呵呵
                                    <br>
                                    <small class="text-muted">昨天</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a class="J_menuItem" href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                    <span class="pull-right text-muted small">4分钟前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-qq fa-fw"></i> 3条新回复
                                    <span class="pull-right text-muted small">12分钟钱</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a class="J_menuItem" href="notifications.html">
                                    <strong>查看所有 </strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>-->
        </nav>
    </div>
    <div class="row J_mainContent" id="content-main">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>


</div>
</div>
<!--右侧部分结束-->
</div>


<!-- 全局js -->
<script src="/public/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/public/js/metisMenu/jquery.metisMenu.js"></script>
<script src="/public/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/public/js/layer/layer.min.js"></script>

<!-- 自定义js -->
<script src="/public/js/hAdmin.js?v=4.1.0"></script>
<script type="text/javascript" src="/public/js/index.js"></script>

</body>

</html>
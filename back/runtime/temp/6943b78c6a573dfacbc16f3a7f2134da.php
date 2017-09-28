<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/news/detail.html";i:1506405757;s:64:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/layout.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/head.html";i:1506324222;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/header.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/menu.html";i:1506295202;s:68:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/nav.html";i:1506295202;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/footer.html";i:1506295202;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>  </title>

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

            <?php if(is_array($access_menu) || $access_menu instanceof \think\Collection || $access_menu instanceof \think\Paginator): if( count($access_menu)==0 ) : echo "" ;else: foreach($access_menu as $key=>$m): ?>
            <li class="<?php if($module == $m['name']): ?>active <?php endif; ?>">
                <a href="#"><i class="fa <?php echo $m['icon']; ?>"></i> <span class="nav-label"><?php echo $m['str']; ?></span><span class="fa arrow"></span></a>
                <span class="fa arrow"></span>
                <ul class="nav nav-second-level collapse <?php if($module == $m['name']): ?>in <?php endif; ?>" >
                <?php foreach($m['child'] as $k => $v): ?>
                    <li class="<?php if($action == $v['action']): ?>active <?php endif; ?>">
                        <a class="J_menuItem" href="/admin/<?php echo $m['name']; ?>/<?php echo $v['action']; if(isset($v['params'])): ?>?<?php echo $v['params']; endif; ?>"><?php echo $v['str']; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>

            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <!--<li>
                <a href="/admin/user"><i class="fa fa-edit"></i> <span class="nav-label">人员管理</span></a>
            </li>-->
        </ul>
    </div>
</nav>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a>

            </div>
            <div style="float:right;font-size: 15px;font-weight:900;line-height: 50px; margin-right: 40px;"><a href="/admin/login/logout">注 销</a></div>

        </nav>
    </div>
    <div class="row J_mainContent" id="content-main">

<script type="text/javascript" charset="utf-8" src="/public/bower_components/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/bower_components/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/public/bower_components/ueditor/lang/zh-cn/zh-cn.js"></script>
<style>
    .div-t {
        margin-top: 30px;
        margin-bottom: 20px;
        text-align: center;
    }
    .div-l {
        font-weight: 900;
        font-size: 18px;
        color: black;
    }
    .div-t input {
        height: 40px;
        line-height: 40px;
        font-size: 17px;
        width: 800px;
    }
    .btn-list {
        margin:20px 0px;
    }
</style>
<body>
<div class="div-t">
    <label class="div-l" for="title">标题：</label>
    <input type="text" placeholder="请输入新闻标题" id="title" value='<?php if(isset($news)): ?> <?php echo $news["title"]; endif; ?>'>
</div>
<div>
    <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
</div>

<div class="btn-list">
    <button class="btn btn-w-m btn-primary" onclick="complete()">完成</button>
    <button class="btn btn-w-m btn-default" onclick="cancel()">取消</button>
</div>

<script type="text/javascript">
    function cancel() {
        location.href = '/admin/news/index';
    }
    function complete() {
        var data = {
            title:  $('#title').val(),
            content: UE.getEditor('editor').getContent(),
        };
        <?php if(isset($news)): ?>
        data['id'] = <?php echo $news['id']; ?>;
        $.post('/admin/news/update_news', data, function (res) {
            if (res.status == 'ok') {
                alert('提交成功');
                location.href = '/admin/news/index';
            } else {
                alert(res.msg);
            }
        });
        <?php else: ?>
        $.post('/admin/news/add_news', data, function (res) {
            if (res.status == 'ok') {
                alert('提交成功');
                location.href = '/admin/news/index';
            } else {
                alert(res.msg);
            }
        });
        <?php endif; ?>
    }

    var ue = UE.getEditor('editor');
    ue.ready(function() {
        ue.setContent('<?php if(isset($news)): ?> <?php echo $news["content"]; endif; ?>');
    });
</script>
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
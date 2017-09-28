<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/role/add_role.html";i:1506295202;s:64:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/layout.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/head.html";i:1506295202;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/header.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/menu.html";i:1506295202;s:68:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/nav.html";i:1506295202;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/footer.html";i:1506295202;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> 恋爱吧 </title>

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

<style>
    .role_manage {
        padding: 10px 20px;
    }
    .role_manage .select {
        width: 120px;
        display: inline-block;
    }
    .role_manage .title {
        font-size:16px;
        font-weight: 700;
        border-bottom: 1px solid #eeeeee;
        padding:10px;
    }
    .role_manage .content {
        border-bottom: 1px solid #eeeeee;
        padding:10px;
    }
    .role_manage span {
        margin-right: 10px;
    }
    .role_manage #name {
        margin-left:10px;
    }
    .role_manage button {
        margin-top:20px;
        margin-bottom: 50px;
    }
</style>
<div class="role_manage">
    <div class="title">部门名称<input type="text" id="name"></div>
    <?php foreach($menu as $item): ?>
    <div class="title"><?php echo $item['str']; ?></div>
    <div class="content" id=<?php echo $item['name']; ?>>
        <?php foreach($item['child'] as $k=>$child): ?>
        <div class="select">
            <span><?php echo $child['str']; ?></span><input type="checkbox" sid="<?php echo $k; ?>">
        </div>
        <?php endforeach; ?>
    </div>

    <?php endforeach; ?>
    <button class="btn btn-primary">确认提交</button>
</div>
<script>
    $('.btn').click(function() {
        var data = {
            'name': $('#name').val(),
            'role': {},
        }
        $('.content').each(function() {
            var name = $(this).attr('id');
            data.role[name] = {};
            $(this).find('input').each(function() {
                var sid = $(this).attr('sid');
                if($(this).is(':checked'))
                    data.role[name][sid] = 1;
                else {
                    data.role[name][sid] = 0;
                }
            })

        });
        $.post('/admin/role/add_role', data, function(res) {
            if(res.ok) {
                alert(res.msg);
                location.href = '/admin/role/to';
            } else {
                alert('失败');
            }
        });
    });
</script>


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
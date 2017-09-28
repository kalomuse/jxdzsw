<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/product/index.html";i:1506441472;s:64:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/layout.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/head.html";i:1506564515;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/header.html";i:1506295202;s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/menu.html";i:1506295202;s:68:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/nav.html";i:1506295202;s:71:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/common/footer.html";i:1506295202;}*/ ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>后台管理系统</title>

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
    #edit_table_list_2 {
        display: none;
    }

    .upload_file_btn {
        font-size: 10px;

    }
    .close-sty {
        position: absolute;top:-3px;right:10px; color:red;opacity:1;z-index: 999;
    }
    .file-div {
        position: relative;
    }
    #editmodtable_list_2 {
        overflow: auto !important;

        bottom: 100px;
    }
</style>
<!-- jqgrid-->
<link href="/public/css/jqgrid/ui.jqgrid.css?0820" rel="stylesheet">
<script>
    action = 'product';
    var id = 1, type = action, $list = $('.uploader-list');
    function dian(self) {
        var is_create = $('#dialog_upload').attr('is_create'),
        attr = $(self).attr('arid');
        if(is_create == 1) {
            $list = $(self).parents('td');
            var url = '/base/upload/img?type=' + type + '&is_create=' + is_create + '&attr=' + attr;
            uploader.option('server', url);
            $('.webuploader-element-invisible').click();
        } else {
            var id = $('#dialog_upload').attr('trid')? $('#dialog_upload').attr('trid'):$(self).parents('tr').attr('id');
            uploader.option('server', '/base/upload/img?id=' + id + '&type=' + type + '&attr=' + attr);
            $list = $(self).parents('td');
            $('.webuploader-element-invisible').click();
        }
    }
    function file_delete(self) {
        var r=confirm("确认删除？"),
            attr = $(self).parents('td').next('td').find('a').attr('arid');
        if (r==true) {
            var index = $(self).parents('.file-div').index(),
                id = $(self).parents('tr').attr('id');
            $.post('/admin/' + action + '/delete_file', {'id':id, 'index':index, 'attr': attr}, function(res) {
                $(self).parents('.file-div').remove();
            });

        }
    };
</script>
<link rel="stylesheet" type="text/css" href="/public/js/webuploader/webuploader.css?v=21">
<link rel="stylesheet" type="text/css" href="/public/js/webuploader/webuploader-demo.css">
<div id="uploader" class="wu-example" style="display: none">
    <div id="thelist" class="uploader-list"></div>
    <div class="btns">
        <div id="picker">选择文件</div>
    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="jqGrid_wrapper">
                <table id="table_list_2"></table>
                <div id="pager_list_2"></div>
            </div>
        </div>
    </div>
</div>

<!-- webuploader -->
<script src="/public/js/webuploader/webuploader.min.js"></script>
<script src="/public/js/webuploader/fileUpload-demo.js?v=5"></script>
<!-- jqGrid -->
<!--<script src="/public/js/editable-table.js"></script>-->
<script src="/public/js/jqgrid/i18n/grid.locale-cn.js?0820"></script>
<script src="/public/js/jqgrid/jquery.jqGrid.min.js?0828"></script>
<script src="/public/js/table.js?v=32"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        var id = "table_list_2";
        $grid = $("#table_list_2");
        var config = [
            {'str': '产品名称', 'name': 'name', 'align':'center'},
            {
                'str':'缩略图',
                name: 'first_img',
                width: 300,
                classes: 'file_mark',
                formatter: function (data) {
                    var str = '';
                    if(data) {
                        var files = data.split(',');
                        for (index in files) {
                            var file = files[index].split('||');
                            if (file && file[0] && file[1]) {
                                var end = file[1].split('.');
                                end = end[end.length - 1];
                                str += '<div class="file-div">' +
                                    '<a target= _blank href="' + file[0] + '">' + file[1] + '</a>' +
                                    '<button type="button" class="close close-sty" aria-label="Close"  onclick="file_delete(this);"><span aria-hidden="true">&times;</span></button> ' +
                                    '</div>';

                            }
                        }
                    }
                    return str;
                },editable: false,
            },
            {'str': '上传', 'name':'upload', formatter: function (data) {
                return '<a arid="first_img" onclick="dian(this)">选择文件</a>'
            },editable: false,width:70,
            },

            {
                'str':'主页图',
                name: 'detail',
                width: 300,
                classes: 'file_mark',
                formatter: function (data) {
                    var str = '';
                    if(data) {
                        var files = data.split(',');
                        for (index in files) {
                            var file = files[index].split('||');
                            if (file && file[0] && file[1]) {
                                var end = file[1].split('.');
                                end = end[end.length - 1];
                                str += '<div class="file-div">' +
                                    '<a target= _blank href="' + file[0] + '">' + file[1] + '</a>' +
                                    '<button type="button" class="close close-sty" aria-label="Close"  onclick="file_delete(this);"><span aria-hidden="true">&times;</span></button> ' +
                                    '</div>';

                            }
                        }
                    }
                    return str;
                },editable: false,
            },
            {'str': '上传', 'name':'upload', formatter: function (data) {
                return '<a arid="detail" onclick="dian(this)">选择文件</a>'
            },editable: false,width:70,
            },

        ];
        var params = {
                onInitializeForm : function (form) {
                    $('#tr_file').remove();
                    $('#tr_date input').val(getNowFormatDate());
                    var str = '<a arid="first_img" onclick="dian(this)" is_create="1" id="dialog_upload">选择文件</a>';
                    form.find('tbody').append('<tr class="FormData" id="tr_file"><td class="CaptionTD"><label for="first_img">缩略图</label></td><td class="DataTD">'+str+'</td></tr>');
                    var str = '<a arid="detail" onclick="dian(this)" is_create="1" id="dialog_upload">选择文件</a>';
                    form.find('tbody').append('<tr class="FormData" id="tr_file"><td class="CaptionTD"><label for="demo">主页图</label></td><td class="DataTD">'+str+'</td></tr>');

                },
                beforeSubmit: function (postdata, formid) {
                    delete postdata[$grid.attr('id') + '_id'];
                    postdata['oper'] = 'add';
                    var is_create = parseInt($('#dialog_upload').attr('is_create')), id='';
                    if(!is_create) {
                        postdata['oper'] = 'edit';
                        var id = $('#dialog_upload').parents('tr').attr('id');
                    }
                    $.post('/admin/'+action+'/ajax_edit?is_create=' + is_create + '&id=' + id, postdata, function (res) {
                        $grid.addRowData(res.id, postdata, 'first');
                        if(res.file) {
                            location.reload();
                        }
                        $(".ui-jqdialog-titlebar-close").trigger('click');

                    });
                },

            },
            other = {
                edit: false,
                add: true,
                del: false,
                search: true,
            }
        jgrid_init($grid, config, params, 0, '/admin/'+action+'/' , '#pager_list_2', null, {cellEdit : false},other );

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
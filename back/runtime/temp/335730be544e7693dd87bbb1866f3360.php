<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"/Users/apple/git/huaqi/jxdzsw/application/admin/view/login/index.html";i:1506298439;}*/ ?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>恋爱吧</title>
    <style>
        .register-container {
            text-align: center;
            color: #fff;
            padding: 90px 15px 0px 15px;
            background-image: url('/public/img/local/bg_launch.jpg');
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-size: cover;
            background-position: center top;
            background-repeat: no-repeat;
        }
        h1 {
            font-size: 30px;
            font-weight: 700;
            text-shadow: 0 1px 4px rgba(0,0,0,.2);
        }

        form {
            position: relative;
            width: 305px;
            margin: 15px auto 0 auto;
            text-align: center;
        }

        input {
            width: 270px;
            height: 42px;
            line-height:42px;
            margin-top: 25px;
            padding: 0 15px;
            background: #2d2d2d; /* browsers that don't support rgba */
            *background-color:transparent;
            background: rgba(45,45,45,.15);
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 1px solid #3d3d3d; /* browsers that don't support rgba */
            border: 1px solid rgba(255,255,255,.15);
            -moz-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            box-shadow: 0 2px 3px 0 rgba(0,0,0,.1) inset;
            font-family: 'PT Sans', Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #fff;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }

        input:-moz-placeholder { color: #fff; }
        input:-ms-input-placeholder { color: #fff; }
        input::-webkit-input-placeholder { color: #fff; }

        input:focus {
            outline: none;
            -moz-box-shadow:
                    0 2px 3px 0 rgba(0,0,0,.1) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                    0 2px 3px 0 rgba(0,0,0,.1) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                    0 2px 3px 0 rgba(0,0,0,.1) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
        }

        button {
            cursor: pointer;
            width: 270px;
            height: 44px;
            margin-top: 25px;
            padding: 0;
            background: #ef4300;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            border: 0px;
            -moz-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.25) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.25) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.25) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            font-family: 'PT Sans', Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 1px 2px rgba(0,0,0,.1);
            -o-transition: all .2s;
            -moz-transition: all .2s;
            -webkit-transition: all .2s;
            -ms-transition: all .2s;
        }

        button:hover {
            -moz-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.15) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.15) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.15) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
        }

        button:active {
            -moz-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.15) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            -webkit-box-shadow:
                    0 15px 30px 0 rgba(255,255,255,.15) inset,
                    0 2px 7px 0 rgba(0,0,0,.2);
            box-shadow:
                    0 5px 8px 0 rgba(0,0,0,.1) inset,
                    0 1px 4px 0 rgba(0,0,0,.1);

            border: 0px solid #ef4300;
        }

    </style>
</head>
<body>
<div class="register-container">
    <h1>管 理 系 统</h1>
    <div>
        <input type="text" id="username" placeholder="请输入账号" autocomplete="off"/>
    </div>
    <div>
        <input type="password" id="password" placeholder="请输入密码" oncontextmenu="return false" onpaste="return false" />
    </div>
    <button id="register_btn" type="button">登 录</button>
</div>

<script src="/public/js/jquery.min.js?v=2.1.4"></script>
<script>
    $('#register_btn').click(function() {
        var url = "/admin/login",

            $data = {
                'password': $('#password').val(),
                'username': $('#username').val(),
                'verify': $('#verify').val(),
            }

        $.post(url, $data, function(res) {
            if(res.status == 'ok') {
                alert('登录成功');
                location.href = '/admin';
            } else {
                alert(res.msg);
            }
        });
    })
</script>
</body>
</html>
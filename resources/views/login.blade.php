<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Hello Amaze UI</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link type="image/x-icon" href="{{asset('favicon.ico')}}" rel="icon">
    <link type="image/x-icon" href="{{asset('favicon.ico')}}" rel="shortcut icon"/>
    <link type="image/x-icon" href="{{asset('favicon.ico')}}" rel="bookmark"/>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link type="image/x-icon" href="{{asset('favicon.ico')}}" rel="icon">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link type="image/x-icon" href="{{asset('favicon.ico')}}" rel="icon">


    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

    <style>
        .login {
            width: 40%;
            position: fixed;
            left: 30%;
            top: 200px;
            color: #fff;
        }
        .login input {
            opacity: 0.5;
        }
    </style>
</head>
<body>
<div class="login">
    <form class="am-form" action="">
        <h2>登录</h2>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
        <div class="am-form-group">
            <label for="userid">账号</label>
            <input type="text" id="userid" name="userid" placeholder="校园网账号">
        </div>
        <div class="am-form-group">
            <label for="password">密码</label>
            <input type="text" id="password" name="password" placeholder="密码">
        </div>
        <button type="submit" class="am-btn am-btn-default am-fr">登录</button>
    </form>
</div>
<div id="container">
    <div id="anitOut" class="anitOut" style="">
    </div>
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="{{asset('assets/js/amazeui.ie8polyfill.min.js')}}"></script>
<![endif]-->
<script src="{{asset('assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('js/cav.js')}}"></script>
<script src="{{asset('js/getStart.js')}}"></script>
</body>
</html>
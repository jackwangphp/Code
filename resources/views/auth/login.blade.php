<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>CUCIPM</title>

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
    <link rel="stylesheet" href="{{asset('css/public.css')}}">
    <style>
        body {
            background-color:#dddddd;
        }
    </style>
</head>
<body>
<div class="login am-g">
    <div class="am-u-lg-12">
        <form class="am-form" method="post">
            <h2>登录</h2>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="am-alert am-alert-danger" data-am-alert>
                    {{ $error }}
                    </div>
                @endforeach
            @endif
            @if(isset($msg))
            <div class="am-alert am-alert-danger" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                {{ $msg }}
            </div>
            @endif
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
            <div class="am-form-group">
                <label for="userid">账号</label>
                <input type="text" id="userid" name="userid" value="{{ $userid or '' }}" placeholder="校园网账号" required>
            </div>
            <div class="am-form-group">
                <label for="password">密码</label>
                <input type="password" id="password" name="password" placeholder="密码" required>
            </div>
            @csrf
            <button type="submit" class="am-btn am-btn-default" style="width: 100%">登录</button>
        </form>
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
</body>
</html>
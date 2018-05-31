<!doctype html>
<html class="no-js">
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
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
        href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->


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
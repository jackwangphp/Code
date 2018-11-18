<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>CUCIPM-@yield('title')</title>

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
    @section('css_js')
        {{--js,css--}}
    @show
    <style>
        .am-topbar .am-text-ir {
            display: block;
            margin-right: 10px;
            height: 50px;
            width: 125px;
            background: url({{asset('assets/i/logo-top.png')}}) no-repeat left center;
            -webkit-background-size: 125px 24px;
            background-size: 125px 24px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
        href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<footer class="footer">
    <p>© 2018 <a href="#" target="_blank">CUCIPM</a> Licensed under <a
                href="#" target="_blank">CUC</a>. by the JAckWong.</p>
</footer>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" style="width: 50px;">
    <a href="#top" title="回到顶部">
        <img class="am-gotop" src="{{asset('assets/i/totop.gif')}}" style="width: 50px;height: 50px"/>
    </a>
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
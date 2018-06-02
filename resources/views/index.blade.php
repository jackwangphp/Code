<!doctype html>
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
        .footer p {
            color: #7f8c8d;
            margin: 0;
            padding: 15px 0;
            text-align: center;
            background: #2d3e50;
        }
        .screen {
            background: #1E5B94;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }
        .screen-title {
            font-size: 200%;
            border: 2px solid #fff;
            padding: 20px;
            display: inline-block;
        }
        .screen-btn {
            background: #fff;
        }
        .project {
            background: #fff;
            margin-bottom: 30px;
        }
        .project-h2 {
            text-align: center;
            font-size: 150%;
            margin: 20px 0;
            color: #34495e;
        }
        .project-h3 {
            color: #34495e;
        }
        .project-detail p {
            color: #7f8c8d;
        }
        .about {
            background: #fff;
            padding: 40px 0;
            color: #7f8c8d;
        }
        .about-h2 {
            font-size: 180%;
            text-align: center;
            color: #34495e;
        }
        .about-color {
            color: #34495e;
        }

    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
        href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-fixed-top">
    <div class="am-container">
        <h1 class="am-topbar-brand">
            <a href="#" class="am-text-ir">CUCIPM</a>
        </h1>

        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li class="am-active"><a href="#">首页</a></li>
                <li><a href="#">项目</a></li>
                <li><a href="#">申请</a></li>
            </ul>

            <div class="am-topbar-right">
                <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
            </div>

            <div class="am-topbar-right">
                <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
            </div>
        </div>
    </div>
</header>
<div class="screen">
    <div class="am-g">
        <div class="am-u-lg-12">
            <h1 class="screen-title">CUC大学生创新项目</h1>
            <p>期待你的参与，打造CUCIPM</p>
            <p><a class="am-btn am-btn-sm screen-btn" href="#">查看更多项目</a></p>
        </div>
    </div>
</div>
<div class="project">
    <div class="am-g am-container">
        <div class="am-lg-12">
           <h2 class="project-h2">技术、理论、艺术，CUCIPM 需要你的每项才能！</h2>
            <div class="am-g">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 project-detail">
                    <div class="am-thumbnail">
                        <img src="{{asset('img/project.jpg')}}" alt="栗子志愿">
                        <div class="am-thumbnail-caption">
                            <h3 class="project-h3">栗子志愿</h3>
                            <p>高考志愿填报网站</p>
                            <p><a href="#" class="am-btn am-btn-primary">了解更多</a></p>
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 project-detail">
                    <div class="am-thumbnail">
                        <img src="{{asset('img/project.jpg')}}" alt="栗子志愿">
                        <div class="am-thumbnail-caption">
                            <h3 class="project-h3">栗子志愿</h3>
                            <p>高考志愿填报网站</p>
                            <p><a href="#" class="am-btn am-btn-primary">了解更多</a></p>
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 project-detail">
                    <div class="am-thumbnail">
                        <img src="{{asset('img/project.jpg')}}" alt="栗子志愿">
                        <div class="am-thumbnail-caption">
                            <h3 class="project-h3">栗子志愿</h3>
                            <p>高考志愿填报网站</p>
                            <p><a href="#" class="am-btn am-btn-primary">了解更多</a></p>
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12 project-detail">
                    <div class="am-thumbnail">
                        <img src="{{asset('img/project.jpg')}}" alt="栗子志愿">
                        <div class="am-thumbnail-caption">
                            <h3 class="project-h3">栗子志愿</h3>
                            <p>高考志愿填报网站</p>
                            <p><a href="#" class="am-btn am-btn-primary">了解更多</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="project-more am-btn am-btn-primary am-center">更多CUCIPM项目</a>
        </div>
    </div>
</div>
<div class="about">
    <div class="am-g am-container">
        <div class="sm-u-lg-12">
            <h2 class="about-h2">技术、理论、艺术，邀请你加入CUCIPM</h2>
        </div>
        <div class="am-u-lg-4 am-u-sm-12">
            <h4 class="about-color">关于我们</h4>
            <p>CUCIPM致力于提供方便快捷的大学生创新项目解决方案，我们有三流的开发团队！好吧，就我一个人，如果你看不下去我垃圾的代码与设计，欢迎来取代我。</p>
        </div>
        <div class="am-u-lg-4 am-u-sm-12">
            <h4 class="about-color">团队介绍</h4>
            <p>CUCIPM由世界上最好的语言PHP（拍黄片）的使用者JackWong、他自己、他本人组成，emmmmmm</p>
        </div>
        <div class="am-u-lg-4 am-u-sm-12">
            <h4 class="about-color">加入我们</h4>
            <p>小姐姐优先，要可爱的那种。HTML、PHP、JavaScript到AmazeUI、laravel、jQuery、Vue，可能用到的技术，希望我们一起学习。</p>
        </div>
    </div>
</div>
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
@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统')
@section('body')
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
@endsection

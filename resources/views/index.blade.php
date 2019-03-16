@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统')
@section('body')
    <div class="screen">
        <div class="am-g">
            <div class="am-u-lg-12">
                <h1 class="screen-title">CUC大学生创新项目</h1>
                <p>期待你的参与，打造CUCIPM</p>
                <p><a class="am-btn am-btn-sm screen-btn" href="{{route('projects.index')}}">查看更多项目</a></p>
            </div>
        </div>
    </div>
    <div class="am-container">
    <div class="apply am-g">
            <div class="am-u-sm-3">
                <a href="{{route('team')}}">
                    <span class="am-icon-btn am-icon-btn-lg am-icon-user-plus am-center"></span>
                    <h3>创建团队</h3>
                </a>
            </div>
            <div class="am-u-sm-3">
                <a href="{{route('applications.create')}}">
                    <span class="am-icon-btn am-icon-btn-lg am-icon-diamond am-center"></span>
                    <h3>申请资格</h3>
                </a>

            </div>
            <div class="am-u-sm-3">
                <a href="#">
                    <span class="am-icon-btn am-icon-btn-lg am-icon-spinner am-icon-spin am-center"></span>
                    <h3>等待审批</h3>
                </a>
            </div>
            <div class="am-u-sm-3">
                <a href="{{route('projects.create')}}">
                    <span class="am-icon-btn am-icon-btn-lg am-icon-rocket am-center"></span>
                    <h3>项目发布</h3>
                </a>
            </div>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
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
                <a href="{{route('projects.index')}}" class="project-more am-btn am-btn-primary am-center">更多CUCIPM项目</a>
            </div>
        </div>
    </div>
@endsection

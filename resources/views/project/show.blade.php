@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请列表')
@section('body')
    <div class="am-container project">
        <ol class="am-breadcrumb am-breadcrumb-slash">
            <li><a href="/" class="am-icon-home">首页</a></li>
            <li><a href="{{route('projects.index')}}">项目</a></li>
            <li class="am-active">{{$project->name}}</li>
        </ol>
        <div class="am-g">
            <div class="am-u-lg-8">

                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd">
                        <h2 class="am-panel-title">{{ $project->name }}</h2>
                    </header>
                    <div class="am-panel-bd am-kai">
                        <p>{{$project->desc}}</p>
                    </div>
                    @if(!is_null($teams))
                        <table class="am-table am-table-bordered am-table-striped am-table-hover">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>年级</th>
                                <th>学院</th>
                                <th>专业</th>
                                <th>类型</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                                @if(isset($team['title']))
                                    <tr>
                                        <td>{{ $team['name'] }}</td>
                                        <td></td>
                                        <td>{{ $team['college'] }}</td>
                                        <td>{{ $team['major'] }}</td>
                                        <td>{{ $team['inteam'] }}
                                            <small>{{ $team['title'] }}</small>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>{{ $team['name'] }}</td>
                                        <td>{{ $team['grade'] }}</td>
                                        <td>{{ $team['college'] }}</td>
                                        <td>{{ $team['major'] }}</td>
                                        <td>{{ $team['inteam'] }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </section>
                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd">
                        <h2 class="am-panel-title">成果展示</h2>
                    </header>
                    <div class="am-panel-bd">
                        <div data-am-widget="slider" class="am-slider am-slider-default"
                             data-am-slider='{"animation":"slide","controlNav":"thumbnails"}'>
                            <ul class="am-slides">
                                <li data-thumb="http://s.amazeui.org/media/i/demos/bing-1.jpg">
                                    <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg">

                                </li>
                                <li data-thumb="http://s.amazeui.org/media/i/demos/bing-2.jpg">
                                    <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg">

                                </li>
                                <li data-thumb="http://s.amazeui.org/media/i/demos/bing-3.jpg">
                                    <img src="http://s.amazeui.org/media/i/demos/bing-3.jpg">

                                </li>
                                <li data-thumb="http://s.amazeui.org/media/i/demos/bing-4.jpg">
                                    <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg">

                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="am-u-lg-4">
                <ul class="am-list am-list-border">
                    <li><a href="{{$project->git}}"><i class="am-icon-github"></i> {{$project->git}}</a></li>
                    <li><a href="#"><i class="am-icon-envelope"></i> {{$project->email}}</a></li>
                    <li><a href="{{$project->website}}"><i class="am-icon-edge"></i> {{$project->website}}</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
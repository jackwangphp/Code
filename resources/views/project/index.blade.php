@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请列表')
@section('body')
    <div class="am-container app-list">
        <ol class="am-breadcrumb am-breadcrumb-slash">
            <li><a href="/" class="am-icon-home">首页</a></li>
            <li>项目</li>
        </ol>
        <section class="am-panel am-panel-default">
            <header class="am-panel-hd">
                <h3 class="am-panel-title">大创申请列表</h3>
            </header>
            <div class="am-panel-bd">
                <ul class="am-list">
                    @foreach($projects as $project)
                        <li><a href="{{ route('projects.show', ['$project'=>$project['id']]) }}"><i class="am-icon-envira am-icon-fw"></i>{{ $project['name'] }}--{{$project['creator']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        {{$projects->links('vendor.pagination.default')}}
    </div>
@endsection
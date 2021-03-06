@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请列表')
@section('body')
    <div class="am-container app-list">
        <section class="am-panel am-panel-default">
            <header class="am-panel-hd">
                <h3 class="am-panel-title">大创申请列表</h3>
            </header>
            <div class="am-panel-bd">
                <ul class="am-list">
                    @foreach($apps as $app)
                        <li><a href="{{ route('applications.show', ['application'=>$app['id']]) }}"><i class="am-icon-envira am-icon-fw"></i>{{ $app['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
        </section>
        {{$apps->links('vendor.pagination.default')}}
    </div>
@endsection

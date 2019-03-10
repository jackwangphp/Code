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
                    <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                    <li><a href="#">我把最深沉的秘密放在那里。</a></li>
                    <li><a href="#">你不懂我，我不怪你。</a></li>
                    <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
                </ul>
            </div>
        </section>

    </div>
@endsection

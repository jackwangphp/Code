@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统')
@section('body')
<div class="team am-container">
    <div class="am-scrollable-horizontal">
        @if ($errors->any())
            <div class="am-alert am-alert-danger" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post">
            @csrf
            <table class="am-table am-table-bordered am-table-radius am-table-striped">
                <thead>
                <tr>
                    <th>成员类型</th>
                    <th>学号</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>项目负责人</th>
                    <th><input type="text" name="userid_1" value="{{ $userid }}" placeholder="学号" required></th>
                </tr>
                <tr>
                    <th>指导老师</th>
                    <th><input type="text" name="userid_2" placeholder="导师工号" required></th>
                </tr>
                <tr>
                    <th>成员甲</th>
                    <th><input type="text" name="userid_3" placeholder="学号" required></th>
                </tr>
                <tr>
                    <th>成员乙</th>
                    <th><input type="text" name="userid_4" placeholder="学号" required></th>
                </tr>
                <tr>
                    <th>成员丙</th>
                    <th><input type="text" name="userid_5" placeholder="学号" required></th>
                </tr>
                <tr  style="display:none;">
                    <th>成员丁</th>
                    <th><input type="text" name="userid_6"  style="display:none;"></th>
                </tr>
                </tbody>
            </table>
            <button type="submit" class="am-btn am-btn-default am-center" style="width: 40%">邀请</button>
        </form>
    </div>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
@endsection
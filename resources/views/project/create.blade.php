@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请列表')
@section('body')
    <div class="am-container project">
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd">发布项目</div>
            <div class="am-panel-bd">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="am-alert am-alert-warning" data-am-alert>
                            <button type="button" class="am-close">&times;</button>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                <form action="{{ route("projects.store") }}" class="am-form am-form-horizontal" method="post">
                    {{csrf_field()}}
                    <table class="am-form am-table-striped am-table-hover" width="100%">
                        <tr>
                            <td>项目名称</td>
                            <td><input type="text" class="am-form-field am-round" name="name" value="{{old('name')}}" required></td>
                        </tr>
                        <tr>
                            <td>项目描述</td>
                            <td><input rows="3" class="am-form-field am-round" name="desc" value="{{old('desc')}}" required></td>
                        </tr>
                        <tr>
                            <td>Team ID</td>
                            <td><input type="text" class="am-form-field am-round" value="{{old('teamid')}}" name="teamid"></td>
                        </tr>
                        <tr>
                            <td>源码地址</td>
                            <td><input type="text" class="am-form-field am-round" value="{{old('git')}}" name="git"></td>
                        </tr>
                        <tr>
                            <td>联系邮箱</td>
                            <td><input type="text" class="am-form-field am-round" value="{{old('email')}}" name="email"></td>
                        </tr>
                        <tr>
                            <td>项目网址</td>
                            <td><input type="text" class="am-form-field am-round" value="{{old('website')}}" name="website"></td>
                        </tr>
                    </table>
                    <button type="submit" class="am-btn am-btn-default">提交</button>
                </form>
            </div>
        </div>
    </div>
@endsection
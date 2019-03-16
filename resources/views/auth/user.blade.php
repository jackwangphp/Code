@extends('layouts.cucipm')
@section('title', '用户中心')
@section('body')
    <div class="user-info">
        <div class="am-g am-container">
            <div class="am-u-sm-4">
                <div class="am-thumbnail">
                    <img src="{{ asset('img/user.png') }}"/>
                </div>
            </div>
            <div class="am-u-sm-8">
                <section class="am-panel am-panel-default">
                    <header class="am-panel-hd">
                        <h3 class="am-panel-title">基本信息</h3>
                    </header>
                    <div class="am-panel-bd">
                        <ul class="am-list">
                            <li><strong>姓名</strong>：{{ $name }}</li>
                            <li><strong>学部</strong>：{{ $college }}</li>
                            <li><strong>专业</strong>：{{ $major }}</li>
                            <li><strong>邮箱</strong>：{{ $email }}</li>
                            <li><strong>电话</strong>：{{ $cellphone }}</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div class="am-container">
            <section class="am-panel am-panel-default">
                <header class="am-panel-hd">
                    <h3 class="am-panel-title">团队信息    <small>{{$teamid}}</small></h3>
                </header>
                <div class="am-panel-bd">
                    @if(!is_null($teams))
                        <table class="am-table am-table-bordered am-table-striped am-table-hover">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>年级</th>
                                <th>学院</th>
                                <th>专业</th>
                                <th>手机</th>
                                <th>E-mail</th>
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
                                        <td>{{ $team['cellphone'] }}</td>
                                        <td>{{ $team['email'] }}</td>
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
                                        <td>{{ $team['cellphone'] }}</td>
                                        <td>{{ $team['email'] }}</td>
                                        <td>{{ $team['inteam'] }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </section>

        </div>
    </div>
@endsection
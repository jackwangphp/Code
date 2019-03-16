@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请列表')
@section('body')
    <div class="am-container app-detail">
        <div class="am-container application">
            <ol class="am-breadcrumb am-breadcrumb-slash">
                <li><a href="/" class="am-icon-home">首页</a></li>
                <li><a href="{{route('applications.index')}}">申请列表</a></li>
                <li class="am-active">{{$application['name']}}</li>
            </ol>
            <div class="am-panel-group" id="accordion">
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
                            基本信息
                        </h4>
                    </div>
                    <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
                        <div class="am-panel-bd">
                            <table class="am-table am-table-striped am-table-hover">
                                <tr>
                                    <td width="20%;">
                                        <lable>项目名称：</lable>
                                    </td>
                                    <td>{{ $application['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable>项目负责人：</lable>
                                    </td>
                                    {{--<td><input type="text" name="leader"></td>--}}
                                    <td>{{ $teams[0]['name'] }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable>学院年级专业：</lable>
                                    </td>
                                    {{--<td><input type="text" name="major"></td>--}}
                                    <td>{{ $teams[0]['college'] }}
                                        - @if(isset($teams[0]['grade'])){{ $teams[0]['grade'] }}@endif
                                        -{{ $teams[0]['major'] }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable>联系电话：</lable>
                                    </td>
                                    <td>{{ $teams[0]['cellphone'] }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <lable>电子邮件：</lable>
                                    </td>
                                    <td>{{ $teams[0]['email'] }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">
                            申请团队
                        </h4>
                    </div>
                    <div id="do-not-say-2" class="am-panel-collapse am-collapse">
                        <div class="am-panel-bd">
                            <table class="am-table am-table-striped am-table-hover">
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
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">
                            申请理由</h4>
                    </div>
                    <div id="do-not-say-3" class="am-panel-collapse am-collapse">
                        <div class="am-panel-bd">
                            @if(isset($application['reason'])){!! $application['reason'] !!}@endif
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-4'}">
                            项目方案</h4>
                    </div>
                    <div id="do-not-say-4" class="am-panel-collapse am-collapse">
                        <div class="am-panel-bd">
                            @if(isset($application['plan'])){!! $application['plan'] !!}@endif
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-5'}">
                            预期成果</h4>
                    </div>
                    <div id="do-not-say-5" class="am-panel-collapse am-collapse">
                        <div class="am-panel-bd">
                            @if(isset($application['result'])){!! $application['result'] !!}@endif
                        </div>
                    </div>
                </div>
                <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                        <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-6'}">
                            经费预算</h4>
                    </div>
                    <div id="do-not-say-6" class="am-panel-collapse am-collapse">
                        <div class="am-panel-bd">
                            @if(isset($application['outlay_detail'])){!! $application['outlay_detail'] !!}@endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="am-g am-container">
                <div class="am-u-lg-4">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">导师意见</div>
                        <div class="am-panel-bd">
                            {{$application['proposal_t']}}
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-4">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">学部意见</div>
                        <div class="am-panel-bd">
                            {{$application['proposal_d']}}
                        </div>
                    </div>
                </div>
                <div class="am-u-lg-4">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">学院意见</div>
                        <div class="am-panel-bd">
                            {{$application['proposal_u']}}
                        </div>
                    </div>
                </div>

            </div>
            <button class="am-btn">
                <i class="am-icon-cloud-download"></i>
                <a href="{{ route('applications.edit', ['application'=>$application['id']]) }}">导出信息</a>
            </button>
        </div>
    </div>
@endsection

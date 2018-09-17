@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请表')
@section('css_js')
    @include('vendor.ueditor.assets')
@endsection
@section('body')
    <div class="am-container application">
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
        <form action="/applications" class="am-form" method="post">
            @csrf
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
                                    <td width="20%;"><lable>项目名称：</lable></td>
                                    <td><input type="text" name="name" value="@if(isset($application['name'])){{ $application['name'] }}@endif" required></td>
                                </tr>
                                <tr>
                                    <td><lable>项目负责人：</lable></td>
                                    {{--<td><input type="text" name="leader"></td>--}}
                                    <td>{{ $teams[0]['name'] }}</td>
                                </tr>
                                <tr>
                                    <td><lable>学院年级专业：</lable></td>
                                    {{--<td><input type="text" name="major"></td>--}}
                                    <td>{{ $teams[0]['college'] }}- @if(isset($teams[0]['grade'])){{ $teams[0]['grade'] }}@endif -{{ $teams[0]['major'] }}</td>
                                </tr>
                                <tr>
                                    <td><lable>联系电话：</lable></td>
                                    <td>{{ $teams[0]['cellphone'] }}</td>
                                </tr>
                                <tr>
                                    <td><lable>电子邮件：</lable></td>
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
                                    <td>{{ $team['inteam'] }} <small>{{ $team['title'] }}</small></td>
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
                            <script id="reason" name="reason" type="text/plain">
                                @if(isset($application['reason'])){!! $application['reason'] !!}@endif
                            </script>
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
                            <script id="plan" name="plan" type="text/plain">
                                @if(isset($application['plan'])){!! $application['plan'] !!}@endif
                            </script>
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
                            <script id="result" name="result" type="text/plain">
                                @if(isset($application['result'])){!! $application['result'] !!}@endif
                            </script>
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
                            <script id="outlay" name="outlay">
                                @if(isset($application['outlay_detail'])){!! $application['outlay_detail'] !!}@endif
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <button class="am-btn am-btn-success" type="submit">提交</button>
        </form>
    </div>
@endsection

@section('script')
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var config = {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough',
                    'blockquote', 'insertunorderedlist', 'insertorderedlist','simpleupload','fullscreen'],
            ],
            elementPathEnabled: false,
            enableContextMenu:false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true, imageBlockLine: 'center'}
        };
        var plan = UE.getEditor('plan', config);
        plan.ready(function() {
            plan.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var reason = UE.getEditor('reason', config);
        reason.ready(function() {
            reason.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var result = UE.getEditor('result', config);
        result.ready(function() {
            result.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var outlay = UE.getEditor('outlay', config);
        outlay.ready(function() {
            outlay.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection
@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统--申请表')
@section('css_js')
    @include('vendor.ueditor.assets')
@endsection
@section('body')
    <div class="am-container application">
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
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td><lable>项目负责人：</lable></td>
                                    <td><input type="text" name="leader"></tr></td>
                                <tr>
                                    <td><lable>学院年级专业：</lable></td>
                                    <td><input type="text" name="major"></td>
                                </tr>
                                <tr>
                                    <td><lable>联系电话：</lable></td>
                                    <td><input type="text" name="leader_phone"></td>
                                </tr>
                                <tr>
                                    <td><lable>电子邮件：</lable></td>
                                    <td><input type="text" name="leader_email"></td>
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
                                <tr>
                                    <td>MLXG</td>
                                    <td>2015</td>
                                    <td>计算机</td>
                                    <td>计科</td>
                                    <td>10086</td>
                                    <td>123@qq.com</td>
                                    <td>项目负责人</td>
                                </tr>
                                <tr>
                                    <td>UZI</td>
                                    <td>2015</td>
                                    <td>计算机</td>
                                    <td>计科</td>
                                    <td>10086</td>
                                    <td>123@qq.com</td>
                                    <td>导师</td>
                                </tr>
                                <tr>
                                    <td>ZITAI</td>
                                    <td>2015</td>
                                    <td>计算机</td>
                                    <td>计科</td>
                                    <td>10086</td>
                                    <td>123@qq.com</td>
                                    <td>项目成员</td>
                                </tr>
                                <tr>
                                    <td>XIAOHU</td>
                                    <td>2015</td>
                                    <td>计算机</td>
                                    <td>计科</td>
                                    <td>10086</td>
                                    <td>123@qq.com</td>
                                    <td>项目成员</td>
                                </tr>
                                <tr>
                                    <td>MING</td>
                                    <td>2015</td>
                                    <td>计算机</td>
                                    <td>计科</td>
                                    <td>10086</td>
                                    <td>123@qq.com</td>
                                    <td>项目成员</td>
                                </tr>
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
                            <div id="reason" name="reason"></div>
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
                            <div id="plan" name="plan"></div>
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
                            <div id="result" name="result"></div>
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
                            <div id="outlay" name="outlay"></div>
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
        var plan = UE.getEditor('plan');
        plan.ready(function() {
            plan.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var reason = UE.getEditor('reason');
        reason.ready(function() {
            reason.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var result = UE.getEditor('result');
        result.ready(function() {
            result.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
        var outlay = UE.getEditor('outlay');
        outlay.ready(function() {
            outlay.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });
    </script>
@endsection
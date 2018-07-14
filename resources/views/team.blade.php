@extends('layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统')
@section('body')
<div class="team am-container">
    <div class="am-scrollable-horizontal">
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
                    <th>
                        <input type="text" name="userid_1" value="{{ old('userid_1') }}" placeholder="学号" required>
                        @if($errors->has('userid_1'))
                            <small>*{{ $errors->first('userid_1') }}</small>
                        @endif
                    </th>
                </tr>
                <tr>
                    <th>指导老师</th>
                    <th>
                        <input type="text" name="userid_2" value="{{ old('userid_2') }}" placeholder="导师工号" required>
                        @if($errors->has('userid_2'))
                            <small>*{{ $errors->first('userid_2') }}</small>
                        @endif
                    </th>
                </tr>
                <tr>
                    <th>成员甲</th>
                    <th>
                        <input type="text" name="userid_3" value="{{ old('userid_3') }}" placeholder="学号" required>
                        @if($errors->has('userid_3'))
                            <small>*{{ $errors->first('userid_3') }}</small>
                        @endif
                    </th>
                </tr>
                <tr>
                    <th>成员乙</th>
                    <th>
                        <input type="text" name="userid_4" value="{{ old('userid_4') }}" placeholder="学号" required>
                        @if($errors->has('userid_4'))
                            <small>*{{ $errors->first('userid_4') }}</small>
                        @endif
                    </th>
                </tr>
                <tr>
                    <th>成员丙</th>
                    <th>
                        <input type="text" name="userid_5" value="{{ old('userid_5') }}" placeholder="学号" required>
                        @if($errors->has('userid_5'))
                            <small>*{{ $errors->first('userid_5') }}</small>
                        @endif
                    </th>
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
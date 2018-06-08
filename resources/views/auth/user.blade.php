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
</div>
@endsection
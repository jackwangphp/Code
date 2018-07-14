<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .btn_success {
            display: inline-block;
            margin-top: 15px;
            margin-bottom: 10px;
            vertical-align: middle;
            color: rgb(255, 255, 255);
            background-color: rgb(31, 168, 113);
            text-align: center;
        }
        .btn_error {
            display: inline-block;
            margin-top: 15px;
            margin-bottom: 10px;
            vertical-align: middle;
            color: rgb(255, 255, 255);
            background-color: rgb(233, 104, 107);
            text-align: center;
        }
    </style>
</head>
<body>
<h1 style="background: #0a628f; color: #fff">你好，{{ $user->name }} !</h1>
<p style="align-content: center">
    你的同学--{{ $sender->name }}---邀请你加入大创团队
</p>
<p class="btn_success">
    <a target="_blank" href="{{ route('confirm') }}/{{ $user->token }}-1">加入</a>
</p>
<p class="btn_error">
    <a target="_blank" href="{{ route('confirm') }}/{{ $user->token }}-0">拒绝</a>
</p>
</body>
</html>
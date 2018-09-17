<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .btn_success {
            display: inline-block;
            margin-bottom: 0;
            padding: .5em 1em;
            vertical-align: middle;
            font-size: 1.6rem;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            background-color: rgb(20, 168, 114);
        }
        .btn_error {
            display: inline-block;
            margin-bottom: 0;
            padding: .5em 1em;
            vertical-align: middle;
            font-size: 1.6rem;
            font-weight: 400;
            line-height: 1.2;
            text-align: center;
            background-color: rgb(233, 104, 107);
        }
    </style>
</head>
<body>
<h1 style="background: #0a628f; color: #fff">你好，{{ $user->name }} !</h1>
<p style="align-content: center">
    你的同学--{{ $sender->name }}---邀请你加入大创团队
</p>
<p class="btn_success">
    <a target="_blank" href="{{ route('confirm',[$user->token, 1]) }}">加入</a>
</p>
<p class="btn_error">
    <a target="_blank" href="{{ route('confirm',[$user->token, 1]) }}">拒绝</a>
</p>
</body>
</html>
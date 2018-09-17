<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Title</title>
    <style>
        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: normal;
            src: url({{ storage_path('fonts/msyh.ttf') }}) format('truetype');
        }
        body {
            font-family: msyh, DejaVu Sans;
        }
    </style>
</head>
<body>
<div class="apply">
    <table>
        <tr>
            <td>{{ $name }}</td>
            <td>{{ $leader }}</td>
        </tr>
        <tr>
            <td></td>
            <td>row 2, cell 2</td>
        </tr>
    </table>
</div>
<div>
    {!! $reason !!}
</div>

</body>
</html>
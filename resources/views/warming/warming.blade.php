@extends('../layouts.cucipm')
@section('title', '中国传媒大学创新项目管理系统')
@section('body')
    <div class="warming am-container">
        <div class="w-h2">
            <h2 class="about-h2">
                抱歉！{{ $warming }}
            </h2>
        </div>
        <div class="w-img .am-radius">
            <img class="am-img-responsive" src="{{asset('assets/i/warming.gif')}}" alt="warming">
        </div>
    </div>
@endsection
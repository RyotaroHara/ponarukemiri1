


@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="container">
  <div class="row">
    <div class="col-lg-4">
      1 of 2
      <?php
     
     $all_cal = 0;
        for ($i=1; $i<200; $i++) {
    

    $cal = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('num');
    $all_cal += $cal*$num;
}
$nokori_cal = floor((("{$user->Weight}"-"{$user->IdealWeight}")*7200)-$all_cal);
$weight_sa = "{$user->Weight}"-"{$user->IdealWeight}";
print $weight_sa."kg減量まであと".$nokori_cal."kcalだよ";
     ?>
     <body>


    </div>
    <div class="col-lg-4">
      <?php
print "<br />"."{$user->year}"."年"."{$user->month}"."月"."{$user->day}"."日までに結果が欲しい";
                ?>
                
                <html>

<body>
<form action="/battles" method="post">
　  <div class="status text-left">　
　  <a href = "#" class = "list-group-item active">エクササイズ選択</a>
                <a href = "#" class = "list-group-item">
    
    {!! Form::open(['route' => 'battles.store']) !!}
    <input type="hidden" name="cal" value="{{ ($user->Weight)*0.0005 }}" >
    <input type="number" name="num" value="" style="width:50px">回
    {!! Form::submit('腕立て') !!}をした。 <br>
    {!! Form::close() !!}</a>
    <a href = "#" class = "list-group-item">
    {!! Form::open(['route' => 'battles.store']) !!}
    <input type="hidden" name="cal" value="{{ ($user->Weight)*0.1 }}">
    <input type="hidden" name="num" value="1">
    {!! Form::submit('4階から9階まで階段であがる') !!} <br>
    {!! Form::close() !!}
    </a>
    <a href = "#" class = "list-group-item">
    {!! Form::open(['route' => 'battles.store']) !!}
    <input type="hidden" name="cal" value="{{ ($user->Weight)*0.0875 }}">
    <input type="hidden" name="num" value="1">
    {!! Form::submit('9階から4階まで階段でおりる') !!}<br>
    {!! Form::close() !!}
    </a>
    <a href = "#" class = "list-group-item">
    {!! Form::open(['route' => 'battles.store']) !!}
    <input type="hidden" name="cal" value="2.7">

    <input type="number" name="num" value="" style="width:50px">分
    {!! Form::submit('電車内でつま先立ち') !!}<br>

    {!! Form::close() !!}
    </a>
    <a href = "#" class = "list-group-item">
    {!! Form::open(['route' => 'battles.store']) !!}    
    <input type="hidden" name="cal" value="{{ ($user->Weight)*0.29 }}">
    <input type="hidden" name="num" value="1">
    {!! Form::submit('二子玉川駅からクリムゾンハウスまで歩く') !!}<br>
    {!! Form::close() !!}
    </a>
    <a href = "#" class = "list-group-item">
    {!! Form::open(['route' => 'battles.store']) !!}    
    <input type="number" name="cal" value="" style="width:60px">
    <input type="hidden" name="num" value="1">kcal消費する
    {!! Form::submit('運動をした') !!}<br>
    {!! Form::close() !!}
    
    </a>    
    
    </div>
</form>
</body>
</html>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5" style="margin-top:360px;padding:10px; width:400px; height:220px; background-color:skyblue;">
      
     
      
      
    </div>
    <div class="col-lg-5" style="margin-top:360px;margin-left:10px;padding:10px; width:700px; height:220px; background-color:blue;">
      2 of 3
    </div>
    
  </div>
</div>

@endif

@endsection


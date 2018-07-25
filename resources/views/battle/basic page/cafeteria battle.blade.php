


@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="container">
  <div class="row">

    <div class="col-sm-4">
     <h1><?php
        $all_cal = 0;

        for ($i=1; $i<200; $i++) {
    

    $cal = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('num');
    $all_cal += $cal*$num;
}

    $level = floor($all_cal/((("{$user->Weight}"-"{$user->IdealWeight}")*7200)/100));
    print "<br />今".$level."レベルだよ";
    ?>  </h1>
                
<div> 
<img src="{{ url('images/HARA2.jpg') }}">
</div>
                
                
                
<form action="/battles" method="post">
　 <div class="status text-left ">　
　   <div class = "list-group-item active">エクササイズ選択</div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}
        <input type="hidden" name="cal" value="{{ ($user->Weight)*0.0005 }}" >
        <input type="number" name="num" value="" style="width:50px">回
        {!! Form::submit('腕立て') !!}をした。 <br>
        {!! Form::close() !!}</div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}
        <input type="hidden" name="cal" value="{{ ($user->Weight)*0.1 }}">
        <input type="hidden" name="num" value="1">
        {!! Form::submit('4階から9階まで階段であがる') !!} <br>
        {!! Form::close() !!}
        </div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}
        <input type="hidden" name="cal" value="{{ ($user->Weight)*0.0875 }}">
        <input type="hidden" name="num" value="1">
        {!! Form::submit('9階から4階まで階段でおりる') !!}<br>
        {!! Form::close() !!}
        </div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}
        <input type="hidden" name="cal" value="2.7">
        <input type="number" name="num" value="" style="width:50px">分
        {!! Form::submit('電車内でつま先立ち') !!}<br>
        {!! Form::close() !!}
        </div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}    
        <input type="hidden" name="cal" value="{{ ($user->Weight)*0.29 }}">
        <input type="hidden" name="num" value="1">
        {!! Form::submit('二子玉川駅からクリムゾンハウスまで歩く') !!}<br>
        {!! Form::close() !!}
        </div>
        <div class = "list-group-item">
        {!! Form::open(['route' => 'battles.store']) !!}    
        <input type="number" name="cal" value="" style="width:60px">
        <input type="hidden" name="num" value="1">kcal消費する
        {!! Form::submit('運動をした') !!}<br>
        {!! Form::close() !!}
        </div>    
      </div>
    </div>  
</form>
    
    <div class="status text-right ">
      <h1>
        Fat Man
        
      </h1>
<?php
      $finish = strtotime("{$user->year}-{$user->month}-{$user->day}");
$re_sa = $finish - time();
$re_amari = $re_sa%(24*60*60);
$re_hi = ($re_sa - $re_amari)/(24*60*60);

$re_day_cal_amari = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $all_cal)%$re_hi;
$re_day_cal = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $all_cal - $re_day_cal_amari )/$re_hi;

$timestamp = time() ;
$today = date( "Y-m-d" , $timestamp ) ;
$sum_cal = 0;

for ($i=1; $i<200; $i++) {

    $cal = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('num');
    $sum_cal += $cal*$num;
    }
    
$damage = $sum_cal*100/$re_day_cal;
      

//echo $today;
//今日消費したカロリー（$sum_cal）の計算　?>
      @if ($damage>100)
      <img src="{{ url('images/Beat fat.jpg') }}"> 
      @else
      <img src="{{ url('images/fatman.jpg') }}">
      @endif
    
    <br>
    <div> 
    のこりＨＰ
         <meter min=0 max=100 value=<?php  print 100 - $damage;    ?> style="width: 200px;" low="20" high="80" optimum="90" >50%</meter>
 <?php if (floor(100-$damage)<0)print 0; else print floor(100 - $damage) ?>/100
    </div>
    </div>        
     
        </div>
    </div>
</form>
</body>
</html>
    </div>
  </div>
  

@endif

@endsection





@extends('layouts.app')

@section('content')

@if(Auth::check())
    <div class="container">
  <div class="row">
    <div class="col-lg-4">
      1 of 2
    </div>
    <div class="col-lg-4">
      
      
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
    
    <?php
//予定日（$finish）と登録日（$start）の日数差を出す計算　（日数差$hi）
$finish = strtotime("{$user->year}-{$user->month}-{$user->day}");
$start = strtotime("{$user->created_at}");
$sa = $finish - $start;
$amari = $sa%(24*60*60);
$hi = ($sa - $amari)/(24*60*60);


$re_sa = $finish - time();
$re_amari = $re_sa%(24*60*60);
$re_hi = ($re_sa - $re_amari)/(24*60*60);

print "期日まであと".$re_hi."日";


//1日あたりの消費カロリー（$day_cal）の計算
$day_cal_amari = (("{$user->Weight}"-"{$user->IdealWeight}")*7200)%$re_hi;
$day_cal = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $day_cal_amari)/$re_hi;
$re_day_cal_amari = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $all_cal)%$re_hi;
$re_day_cal = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $all_cal - $re_day_cal_amari )/$re_hi;

print "<br />今日は".floor($re_day_cal)."kcal消費しよう";


//今日の範囲を算出
//$today_amari = time()%(24*60*60);
//$today_start = time()-$today_amari;
//$today_end = time()-$today_amari+(24*60*60);


$timestamp = time() ;
$today = date( "Y-m-d" , $timestamp ) ;
//echo $today;
//今日消費したカロリー（$sum_cal）の計算　
$sum_cal = 0;

for ($i=1; $i<200; $i++) {

    $cal = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('num');
    $sum_cal += $cal*$num;
}
print "<br />今日は".floor($sum_cal)."kcal消費したよ";
//print "<br />今日のノルマまで、あと".floor($re_day_cal-$sum_cal)."kcal";
//HPゲージの作成
$damage = $sum_cal*500/$re_day_cal;
$nokori = $re_day_cal - $sum_cal;
if ($nokori>0) {
    print "<br />あと".floor($nokori)."kcal";
}
else{
    print "<br />ノルマ達成！今日は寝て過ごそう！";
}
?>
<meter class="vertical" min="0" max="500" value="<?php print 500 - $damage?>">100%</meter>

<?php


$level = floor($all_cal/((("{$user->Weight}"-"{$user->IdealWeight}")*7200)/100));

print "<br />今".$level."レベルだよ";

?>

</div>


<?php if($level > 25){
//echo ' <img src = "images/cafeteria/otameshi.jpg" /> ' ;
}else{
//echo ' <img src = "images/office/top_office1.jpg" /> ' ;
}
?>
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


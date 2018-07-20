@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->name, 100) . '&d=mm' }}" alt="" class="img-circle">
        </div>
        <div class="name text-center">
            <div id="wrapper">
            <h1>{{ $user->name }}</h1>
            ダイエットする場合でも体調維持の為に最低限摂取しなければいけないカロリーは{{ 370+21.6*($user->Weight)*(100-$user->fat)/100 }}kaclです。<br>
            　  <div class="status-label"><ul>
                    <a href = "#" class = "list-group-item active col-xs-4 col-xs-offset-4">ダイエット中で運動をしない日の食事のおすすめのP:F:Cバランス</a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
                      P(タンパク質):
                      @if (($user->sex)==1)
                        {{ floor((($user->Weight)*(100-($user->fat))/100)*3) }}g                　  
                　  @else (($user->sex)==2) 
                　       {{ floor( ($user->Weight)*(100-($user->fat))/100 * 2)  }}g
                　  @endif
                    </a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
                　   F(脂質):
                　   @if (($user->sex)==1 )
                        {{   floor(( ($user->Weight)*(100-($user->fat))/100)*0.9) }} g
                    @elseif (($user->sex)==2)
                        {{floor(( ($user->Weight)*(100-($user->fat))/100)*1.3) }} g
                    @endif
                    </a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
            　      C(炭水化物): 
            　      @if (($user->sex)==1)
                　   {{floor( ((370+21.6*($user->Weight)*(100-$user->fat)/100)-((($user->Weight)*(100-($user->fat))/100)*12)-((($user->Weight)*(100-($user->fat))/100)*8.1))/4 ) }}g
                    @elseif (($user->sex)==2)
                    {{ floor(((370+21.6*($user->Weight)*(100-$user->fat)/100)-((($user->Weight)*(100-($user->fat))/100)*8)-((($user->Weight)*(100-($user->fat))/100)*11.7))/4  )}}g
                    @endif
                    </a></ul>
                    </div>
                　  <div class="status-label2"><ul> 
                　  <a href = "#" class = "list-group-item active col-xs-4 col-xs-offset-4">ダイエット中で運動をする日の食事のおすすめのP:F:Cバランス</a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
                      P(タンパク質):
                      @if (($user->sex)==1)
                        {{ floor((($user->Weight)*(100-($user->fat))/100)*3) }}g                　  
                　  @else (($user->sex)==2) 
                　       {{ floor( ($user->Weight)*(100-($user->fat))/100 * 2)  }}g
                　  @endif
                    </a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
                　   F(脂質):
                　   @if (($user->sex)==1 )
                        {{   floor(( ($user->Weight)*(100-($user->fat))/100)*0.9) }} g
                    @elseif (($user->sex)==2)
                        {{floor(( ($user->Weight)*(100-($user->fat))/100)*1.3) }} g
                    @endif
                    </a>
                    <a href = "#" class = "list-group-item col-xs-4 col-xs-offset-4">
            　      C(炭水化物): 
            　      @if (($user->sex)==1)
                　   {{floor( ((370+21.6*($user->Weight)*(100-$user->fat)/100)-((($user->Weight)*(100-($user->fat))/100)*12)-((($user->Weight)*(100-($user->fat))/100)*8.1))*1.15/4 ) }}g
                    @elseif (($user->sex)==2)
                    {{ floor(((370+21.6*($user->Weight)*(100-$user->fat)/100)-((($user->Weight)*(100-($user->fat))/100)*8)-((($user->Weight)*(100-($user->fat))/100)*11.7))*1.15/4 )}}g
                    @endif
                    </a></div>
                     </ul>
                  <div class="status-label3">
                    <ul>      
                    <br><br><br>
                    ※P:F:Cバランスはあくまでも目安です。　<br>
                    トレーニング等の細かいアドバイスは製作者にお尋ねください。
                    </ul>
                        </div>
                    </div>    
            </div>
        <div class="status text-center">
        <ul>
            <li>  
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
print "<br />".$user->year."年".$user->month."月".$user->day."日までに結果が欲しい";
                ?>
                
                </li>
                <li>

                    <div class="status-label">あなたの骨格から計算した基礎代謝は <br>
                    
                    @if (($user->sex)==1)
                    
                   {{(13.397)*($user->Weight)+4.799*($user->height)-5.677*($user->age)+88.362}}kcalです。
                    
                    @else (($user->sex)==2)
                    {{(9.247)*($user->Weight)+(3.098)*($user->height)-(4.33)*($user->age)+447.593}}kcalです。
                    
                    @endif 
                    <br> <br>
                    あなたの体脂肪率をもとに計算した基礎代謝は {{ 370+21.6*($user->Weight)*(100-$user->fat)/100 }}kaclです。
                    </div></li>
                    <li>
                    <div class="status-label">
                        あなたの除脂肪体重は{{ ($user->Weight)*(100-($user->fat))/100 }}kg <br> <br>
                        運動強度が{{ $user->ExerciseIntensity}}のあなたの一日の消費カロリーは
                　  @if (($user->ExerciseIntensity)==1)
                　  
                　  {{ 370+21.6*($user->Weight)*(100-$user->fat)/100*1.2 }}
                　  @elseif (($user->ExerciseIntensity)==2)
                　  {{ 370+21.6*($user->Weight)*(100-$user->fat)/100*1.35 }}
                　  
                　  
                　  @elseif (($user->ExerciseIntensity)==3)
                　  {{ 370+21.6*($user->Weight)*(100-$user->fat)/100*1.55 }}
                　  
                　  @else (($user->ExerciseIntensity)==4)
                　  {{ 370+21.6*($user->Weight)*(100-$user->fat)/100*1.9 }}
                　  @endif
                　  <br>
                　  </div></li>


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
                </li>
                
                <li>
                     <div class="status-label">


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

print "<br />今日は".$day_cal."kcal消費しよう";

print "<br />今日のノルマまで、あと".$day_cal."kcal";
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

//HPゲージの作成
$damage = $sum_cal*500/$day_cal;
$nokori = $day_cal - $sum_cal;
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
echo ' <img src = "images/cafeteria/otameshi.jpg" /> ' ;
}else{
echo ' <img src = "images/office/top_office1.jpg" /> ' ;
}
?>

<img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:337px;">
<img class="logo" src="/ponarukemiri1/nana2.jpg" alt="nana2">
　　　　　　　   　　
                </li>
            </ul>
        </div>
    </div>
    
<a href="{{route('users.edit',['id'=>$user->id]) }}">edit</a>

@endsection

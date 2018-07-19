@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->name, 100) . '&d=mm' }}" alt="" class="img-circle">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="status-label">理想の身体を手に入れろ！！</div>
                </li>
                
                
                <li>
                    <div class="status-label">{{$user->Weight-$user->IdealWeight}}kg減量まであと{{($user->Weight-$user->IdealWeight)*7200}}kcal!!</div>
                    <div class=>{{$user->year}}年{{$user->month}}月{{$user->day}}日までに結果が欲しい</div>
                </li>
                <li>
                    <div class="status-label">あなたの基礎代謝は <br>
                    
                    @if (($user->sex)==1)
                    
                   {{(13.397)*($user->Weight)+4.799*($user->height)-5.677*($user->age)+88.362}}kcalです。
                    
                    @else (($user->sex)==2)
                    {{(9.247)*($user->Weight)+(3.098)*($user->height)-(4.33)*($user->age)+447.593}}kcalです。
                    
                    @endif 
                　　
                    </div>
                </li>
                
                <li>
<html>

<body>
<form action="/battles" method="post">
    エクササイズ選択：<br />

    {!! Form::open(['route' => 'battles.store']) !!}
    <input type="hidden" name="cal" value="{{ ($user->Weight)*0.0005 }}">
    <input type="number" name="num" value="">回
                    {!! Form::submit('腕立て') !!}をした。
    {!! Form::close() !!}
</form>
</body>
</html>
                </li>
                
                <li>
                     <div class="staus-label">


<?php
//予定日（$finish）と登録日（$start）の日数差を出す計算　（日数差$hi）
$finish = strtotime("{$user->year}-{$user->month}-{$user->day}");
$start = strtotime("{$user->created_at}");
$sa = $finish - $start;
$amari = $sa%(24*60*60);
$hi = ($sa - $amari)/(24*60*60);

print "期日まであと".$hi."日";

//1日あたりの消費カロリー（$day_cal）の計算
$day_cal_amari = (("{$user->Weight}"-"{$user->IdealWeight}")*7200)%$hi;
$day_cal = (("{$user->Weight}"-"{$user->IdealWeight}")*7200 - $day_cal_amari)/$hi;

print "<br />今日のノルマまで、あと".$day_cal."kcal";

//今日消費したカロリー（$sum_cal）の計算　
$sum_cal = 0;
for ($i=1; $i<1000; $i++) {
    

    $cal = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->whereDate('created_at', '=', "$today")->where('id',"$i")->value('num');
    $sum_cal += $cal*$num;

}
print "<br />今日は".$sum_cal."kcal消費したよ";

//HPゲージの作成
$damage = $sum_cal*100/$day_cal;
$nokori = $day_cal - $sum_cal;
print "<br />あと".$nokori."kcal";
?>
<meter class="vertical" min="0" max="100" value="<?php print 100 - $damage?>">100%</meter>

<?php
$all_cal = 0;
for ($i=1; $i<2000; $i++) {
    
    $cal = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('cal');
    $num = DB::table('battles')->where('user_id',"$user->id")->where('id',"$i")->value('num');
    $all_cal += $cal*$num;
}

$level = floor($all_cal/((("{$user->Weight}"-"{$user->IdealWeight}")*7200)/100));

print "<br />今".$level."レベルだよ";

?>

</div>

                </li>
            </ul>
        </div>
    </div>
    


@endsection

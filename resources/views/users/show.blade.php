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
                     <div class="staus-label">
    
<?php
//予定日と登録日の日数差を出す計算
$finish = strtotime("{$user->year}-{$user->month}-{$user->day}");
$start = strtotime("{$user->created_at}");
//print $finish . PHP_EOL;
//print $start . PHP_EOL;
$sa = $finish - $start;
$amari = $sa%(24*60*60);
$hi = ($sa - $amari)/(24*60*60);

print $hi . PHP_EOL;

$cal = (("{$user->Weight}"-"{$user->IdealWeight}")*7200)/$hi;

print $cal . PHP_EOL;

$day_cal = 0;
for ($i=1; $i<1000; $i++) {
    
    $cal = DB::table('battle')->where('user_id',"$user->id")->where('id',"$i")->value('cal');
    
    $day_cal += $cal;
    
    
}
print $day_cal;

?>



</div>

                </li>
            </ul>
        </div>
    </div>
    


@endsection

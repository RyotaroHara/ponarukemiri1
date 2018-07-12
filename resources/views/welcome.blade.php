@extends('layouts.app')
@section('content')
@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>OFFICEで健康ルンルンルン</h1>
                
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
print $cal;

$day_cal = DB::table('battle')->where('user_id','1')->value('cal')->sum();
print $day_cal;


?>
                
                
                
                
                 @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Start Exercise</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
@extends('layouts.app')

@section('content')
    
@if (Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=link change>
            @include('Exercise.tab.normal.tab_office')
            @include('Exercise.tab.present location.P_tab_way')
            @include('Exercise.tab.normal.tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#FFD5EC;">
            @include('Exercise.link_to_exercise.links_way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#EAD9FF;">
            
            <img class="card-img-top" src="{{ asset('images/way/top_way1.jpg') }}" alt="office" style="width:680px;">
            <br>
            <br>
            
            <div class="aaa" style="text-align:center;">
                 <p style="color:#983181;">【階段を利用した場合の消費カロリー(1分間)】  ※日本体育協会スポーツ科学委員会 発表</p>   
                 <p style="color:#BA2F7D;">上り：0.135（kcal）×体重（kg）/ 下り：0.066（kcal）×体重（kg）</p>
                 <p style="color:#983181;">通勤や社内でも、意識して歩けば習慣に！運動不足な時こそ、階段を使ってみましょう！</p>
            </div>
            
        </div>
            
  </div>

@endif
  
  
@endsection

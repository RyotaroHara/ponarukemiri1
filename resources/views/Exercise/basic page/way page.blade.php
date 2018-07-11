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
            
            <img class="card-img-top" src="{{ asset('images/way/top_way1.jpg') }}" alt="office" style="width:670px;">
            <h4>【階段を利用した場合の消費カロリー(1分間)】</h4>
            <h5>上り：0.135（kcal）×体重（kg）/ 下り：0.066（kcal）×体重（kg）<br><br>
                通勤や社内でも、意識して歩けば習慣に！　　※日本体育協会スポーツ科学委員会 発表<br><br>
                </h5>
        </div>
            
  </div>

@endif
  
  
@endsection

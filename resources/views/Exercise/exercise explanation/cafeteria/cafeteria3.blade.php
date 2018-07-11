@extends('layouts.app')
@section('content')

@if(Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.tab.normal.tab_office')
            @include('Exercise.tab.normal.tab_way')
            @include('Exercise.tab.present location.P_tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.link_to_exercise.links_cafeteria')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
         
        <h3>ヒップアップ</h3>
             <img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
            <h4>食事中の短い時間でも気軽にヒップアップ！<br>
            お尻の穴を締めるように意識して、全体に力を入れて30秒キープしましょう。<br>
            カロリーを摂取している間にも運動を欠かさないことが、ダイエットへのコツです。</h4>
        </div>
            
  </div>

@endif

@endsection
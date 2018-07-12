@extends('layouts.app')

@section('content')

@if(Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.tab.present location.P_tab_office')
            @include('Exercise.tab.normal.tab_way')
            @include('Exercise.tab.normal.tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.link_to_exercise.links_office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
       
       <h3>ふくらはぎの引き締め</h3>
       <img class="card-img-top" src="{{ asset('images/office/calf.jpg') }}" alt="otameshi" style="width:430px;">
    
       <h4>つま先をゆっくり上げて5秒キープ、<br>
       かかとを上げて5秒キープを繰り返しましょう!<br>
       むくみ防止効果があります。</h4>
        </div>
            
  </div>
  
@endif

@endsection

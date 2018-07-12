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
        <div class=medium1 style="padding:10px;width:450px;height:570px;">
            @include('Exercise.link_to_exercise.links_office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div class=medium2 style="padding:10px;width:700px;height:570px;">
            
            <h3>空気椅子</h3>
            <img class="card-img-top" src="{{ asset('images/office/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
            <h4>下半身全体に引き締め効果のある簡単エクササイズです! <br>
            膝が90度になるくらいまで腰を落としましょう。<br>眠気覚ましにもなるので、デスクでやるのに適した動きです。</h4>
        </div>
            
  </div>
  
@endif


@endsection

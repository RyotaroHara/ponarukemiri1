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
        <h3>ヒップアップ</h3>
        <img class="card-img-top" src="{{ asset('images/office/hips.jpg') }}" alt="otameshi" style="width:430px;">
    
        <h4>お尻の穴を締めるように意識して、全体に力を入れて30秒キープしましょう！</h4>
        </div>
            
  </div>

@endif


@endsection

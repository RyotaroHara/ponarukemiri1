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
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.link_to_exercise.links_way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            考えろ
        </div>
            
  </div>

@endif
  
  
@endsection

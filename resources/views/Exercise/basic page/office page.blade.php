@extends('layouts.app')

@section('content')

@if(Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=link change>
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
            
        
            <img class="card-img-top" src="{{ asset('images/office/top_office1.jpg') }}" alt="office" style="width:337px;">
            <img class="card-img-top" src="{{ asset('images/office/top_office4.jpg') }}" alt="office" style="width:337px;">
            <img class="card-img-top" src="{{ asset('images/office/top_office2.jpg') }}" alt="office" style="width:337px;">
            <img class="card-img-top" src="{{ asset('images/office/top_office3.jpg') }}" alt="office" style="width:337px;">
            
        </div>
            
  </div>
    
@endif

   
@endsection

@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    <h1>移動中</h1>
    
　　@if (Auth::check())
                        <li><a href="{{ route('way.way1') }}">移動1</a></li>
                        <li><a href="{{ route('way.way2') }}">移動2</a></li>
                        <li><a href="{{ route('way.way3') }}">移動3</a></li>
                        <li><a href="{{ route('way.way4') }}">移動4</a></li>
                        <li><a href="{{ route('way.way5') }}">移動5</a></li>
                        <li><a href="{{ route('way.way6') }}">移動6</a></li>
                        <li><a href="{{ route('way.way7') }}">移動7</a></li>
                        <li><a href="{{ route('way.way8') }}">移動8</a></li>


    @else
                        <li>このでぶが！</li>
    @endif
=======


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
            @include('Exercise.commons.way')
            @include('Exercise.commons.cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.Genre.way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            とばない
        </div>
            
  </div>
  
  
>>>>>>> 528b63db041c2cc22e48b34d2819a8b414063c93
@endsection

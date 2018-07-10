@extends('layouts.app')

@section('content')

-----------------------------------
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
            @include('Exercise.Genre.office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            @include('Exercise.exercise1')
        </div>
            
  </div>
------------------------------------------------------  
    <h1>カフェテリア</h1>
    
    @if (Auth::check())
                        <li><a href="{{ route('cafeteria.cafeteria1') }}">カフェテリア1</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria2') }}">カフェテリア2</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria3') }}">カフェテリア3</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria4') }}">カフェテリア4</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria5') }}">カフェテリア5</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria6') }}">カフェテリア6</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria7') }}">カフェテリア7</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria8') }}">カフェテリア8</a></li>


    @else
                        <li><a>このでぶが！</a></li>
    @endif
-----------------------

@endsection


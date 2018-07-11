@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
            @include('Exercise.commons.present location.way')
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
            <h3>階段を下る(朝/昼休憩:9階から4階へ、帰り/4階から2階へ)</h3>
            <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
            <h4>下る時も背筋をまっすぐにすることを意識しながら、つま先から降ろします。<br>
            階段を踏み外さないよう目線はしっかり足元を見つつ、姿勢に気を付けましょう。</h4>
        </div>
            
  </div>
  
  
@endsection

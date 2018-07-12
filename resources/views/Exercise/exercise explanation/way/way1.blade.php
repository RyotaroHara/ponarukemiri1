@extends('layouts.app')

@section('content')

@if (Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
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
            <h3>階段を上る(朝:2階から4階へ、昼休憩:4階から9階へ)</h3>
            <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
            <h4>階段を上る時は、前かがみにならないよう背筋をまっすぐに伸ばし、<br>
            目線は下げずに前を見ます。<br>
            膝を高く上げ、足の付け根ではなく骨盤を意識して<br>
            太ももを引き上げるイメージで上りましょう。</h4>
        </div>
            
  </div>
  
@endif

  
@endsection

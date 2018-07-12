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
       
       <h3>PC斜め打ち</h3>
       <img class="card-img-top" src="{{ asset('images/office/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
       <h4>PCに対して正面に座るのではなく、全身を椅子ごと斜めに向けましょう。<br>
       その後、姿勢を正し、腹筋に力を入れるよう意識してひねりながら作業をすると、腹斜筋が鍛えられ血行も促進されます。</h4>
        </div>
            
  </div>

@endif


@endsection

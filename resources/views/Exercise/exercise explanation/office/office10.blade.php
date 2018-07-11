@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.present location.office')
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
       
       <h3>PC斜め打ち</h3>
       <img class="card-img-top" src="{{ asset('images/office/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
       <h4>PCに対して正面に座るのではなく、全身を椅子ごと斜めに向けましょう。<br>
       その後、姿勢を正し、腹筋に力を入れるよう意識してひねりながら作業をすると、腹斜筋が鍛えられ血行も促進されます。</h4>
        </div>
            
  </div>
@endsection

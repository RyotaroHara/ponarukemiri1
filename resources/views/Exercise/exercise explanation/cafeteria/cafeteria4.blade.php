@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
            @include('Exercise.commons.way')
            @include('Exercise.commons.present location.cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.Genre.cafeteria')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            
            <h3>足首ストラップ</h3>
            <img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:430px;">

            <h4>足首をぐるぐると回すことで、むくみ軽減、冷え症改善に繋がります。<br>
            むくみが溜まり、足首周りが硬くなるだけで下半身太りに繋がるので、まずはお昼休憩中に軽く動かしましょう。</h4>
            
        </div>
            
  </div>
  
@endsection
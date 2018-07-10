@extends('layouts.app')
@section('content')

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
            @include('Exercise.Genre.cafeteria')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
        
      
            <h3>ふくらはぎのストレッチ</h3>
            
            <h4>デスクワークでは夕方気になるのが足のむくみ。ふくらはぎのストレッチを行い、事前に防ぎましょう。<br>
            真っ直ぐ立った状態から片足を後ろに引き、前の足に体重をかけます。<br>
            準備体操でお馴染みのストレッチですが、アキレス腱を伸ばすだけではなく全身の血行を良くする効果があります。</h4>
        　　
        　　
        </div>
            
  </div>
@endsection
@extends('layouts.app')
@section('content')

@if(Auth::check())

<div class="row">
<div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.tab.normal.tab_office')
            @include('Exercise.tab.normal.tab_way')
            @include('Exercise.tab.present location.P_tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div class=medium1 style="padding:10px;width:450px;height:570px;">
            @include('Exercise.link_to_exercise.links_cafeteria')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div class=medium2 style="padding:10px;width:700px;height:570px;">
             <div class=title_text1>
               <p>ふくらはぎのストレッチ</p>
             </div>
               <div class=images1>
                 <img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
               </div>
                  <div class=ex_text1>
                     <p>デスクワークでは夕方気になるのが足のむくみ。<br>
                        ふくらはぎのストレッチを行い、事前に防ぎましょう。<br>
                        真っ直ぐ立った状態から片足を後ろに引き、前の足に体重をかけます。<br>
                        準備体操でお馴染みのストレッチですが、<br>
                         アキレス腱を伸ばすだけではなく全身の血行を良くする効果があります。</p>
        　　      </div>
        </div>
            
  </div>
</div>

@endif

@endsection
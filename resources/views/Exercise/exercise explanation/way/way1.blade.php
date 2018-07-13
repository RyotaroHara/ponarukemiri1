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
        <div class=medium1 style="padding:10px;width:450px;height:570px;">
            @include('Exercise.link_to_exercise.links_way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div class=medium2 style="padding:10px;width:700px;height:570px;">
             <div class=title_text2>
               <p>階段を上る(朝:2階から4階へ、昼休憩:4階から9階へ)</p>
             </div>
               <div class=images2>
                <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
               </div>
                 <div class=ex_text2>
                   <p>階段を上る時は、前かがみにならないよう背筋をまっすぐに伸ばし、<br>
                      目線は下げずに前を見ます。<br>
                      膝を高く上げ、足の付け根ではなく骨盤を意識して<br>
                      太ももを引き上げるイメージで上りましょう。</p>
                 </div>
        </div>
            
  </div>
</div>  
@endif

  
@endsection

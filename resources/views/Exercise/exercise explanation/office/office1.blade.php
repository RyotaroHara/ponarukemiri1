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
                <div class=title_text>
                   <p>小顔になるExercise</p>
                </div>   
                     <div class=images>
                        <img src="{{ asset('images/office/face.jpg') }}" alt="otameshi" style="width:350px;" "height:310px;">
                     </div>
                         <div class=ex_text>
                           <p>
                           【手順】<br>
                           歯茎をなぞるようにして、舌をぐるぐる回しましょう。<br>
                           左右20回ずつから始めると、習慣づけることができます。<br><br>
                           【効果】<br>
                           回数を重ねるごとに、リフトラインがシェイプアップされていきます。
                           </p>
                         </div>
        </div>
            
  </div>
</div>

@endif


@endsection

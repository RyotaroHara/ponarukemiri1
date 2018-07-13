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
               <p>電車でのつま先立ち</p>
            </div>
               <div class=images2>
                 <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
               </div>
                  <div class=ex_text2>
                    <p>つり革や手すりにつかまり、最寄り駅から二子玉川駅まで<br>
                       つま先立ちでヒラメ筋と体幹とおしりを鍛えましょう。<br>
                       暇な電車内でも時間を有効活用！</p>
                 </div>
        </div>
            
  </div>
</div>
@endif
  
  
@endsection

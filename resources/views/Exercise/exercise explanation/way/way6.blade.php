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
              <p>内ももシェイプアップ</p>
           </div>
              <div class=images2>
                <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
              </div>
                <div class=ex_text2>
                   <p>"座った状態で足先をクロスし、膝と膝で押し合います。<br>
                      エクササイズをしているように見えないので、公共の場でも安心です。<br>
                      内ももがしっかり硬くなっていればOK。左右交互に行いましょう。<br>
                      内ももが鍛えられ、内ももを普段からうまく使って歩けるようになると、O 脚や骨盤の歪みの改善、太もも全体のシェイプアップができますよ。"</p>
                </div>
        </div>
            
  </div>
</div>  
@endif


@endsection

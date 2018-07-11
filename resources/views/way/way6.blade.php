@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
            @include('Exercise.commons.present location.way')
            @include('Exercise.commons.cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.Genre.way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            <h3>内ももシェイプアップ</h3>
            <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
            <h4>"座った状態で足先をクロスし、膝と膝で押し合います。<br>
            エクササイズをしているように見えないので、公共の場でも安心です。<br>
            内ももがしっかり硬くなっていればOK。左右交互に行いましょう。<br>
            内ももが鍛えられ、内ももを普段からうまく使って歩けるようになると、O 脚や骨盤の歪みの改善、太もも全体のシェイプアップができますよ。"</h4>
        </div>
            
  </div>
  
  
@endsection

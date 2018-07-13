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
        <div class=medium1 style="padding:10px;width:450px;">
            @include('Exercise.link_to_exercise.links_office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div class=medium2 style="padding:10px;width:700px;height:570px;">
          <div class=title_text>
              <p>ウエストの引き締め</p>
          </div>
             <div class=images>
               <img class="card-img-top" src="{{ asset('images/office/ab.jpg') }}" alt="otameshi" style="width:430px;">
             </div>
                <div class=ex_text>
                  <p>まずはゆっくり呼吸をしてみましょう。<br>
                     息を吐き切った時には、グッとお腹に力を入れるよう注意します。<br>
                     息を吸う時は、ゆっくり吸いましょう。</p>
                </div>
        </div>
            
  </div>
</div>

@endif


@endsection

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
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.link_to_exercise.links_way')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            
            <h3>PCの持ち方</h3>
            <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
            <h4>誰かにPCの画面を見せたい、そんな時は腕への引き締め効果を意識しながら持ちましょう！<br>
            腕の筋肉を意識して、PCを身体からこぶし1つ分離し床と平行に持つと、二の腕のシェイプアップに効果あり！</h4>
        </div>
            
  </div>
  
@endif


@endsection

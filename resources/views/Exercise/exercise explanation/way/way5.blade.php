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
            <h3>おなか引き締め</h3>
            <img class="card-img-top" src="{{ asset('images/way/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
            <h4>"ずっと鍛えるのはちょっとしんどい、という人におすすめなのが、「１駅区間エクササイズ」。<br>
            区間を決めてしまうことで、時間を区切って集中して引き締めることができます。<br>
            簡単にできるのは、お腹の引き締め。<br>
            思い切り凹ませるのとは違い、お腹を硬くするイメージで力を入れると効果的です。"</h4>
        </div>
            
  </div>
  
@endif


@endsection

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
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.link_to_exercise.links_cafeteria')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
            <h3>いただきますでバストアップ</h3>
            <img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:430px;">

            <h4>その名の通り、いただきますをしながらバストアップを目指しましょう。<br>
            やり方は簡単、いただきますのポーズをしながら肘を手首の高さまで上げ、15秒押し合うだけ！<br>
            位置を変えて秒数を増やすと、更なる効果が期待できます。</h4>
        </div>
            
  </div>

@endif
  
@endsection
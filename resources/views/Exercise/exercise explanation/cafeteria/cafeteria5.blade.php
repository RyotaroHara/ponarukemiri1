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
               <p>いただきますでバストアップ</p>
            </div>
               <div class=images1>
                  <img class="card-img-top" src="{{ asset('images/cafeteria/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
               </div>
                  <div class=ex_text1>
                    <p>その名の通り、いただきますをしながらバストアップを目指しましょう。<br>
                       やり方は簡単、いただきますのポーズをしながら<br>
                       肘を手首の高さまで上げ、15秒押し合うだけ！<br>
                       位置を変えて秒数を増やすと、更なる効果が期待できます。</p>
                  </div>
        </div>
            
  </div>
</div>

@endif
  
@endsection
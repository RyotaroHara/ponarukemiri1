@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.present location.office')
            @include('Exercise.commons.way')
            @include('Exercise.commons.cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#DDDDDD;">
            @include('Exercise.Genre.office')
        </div>
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#ced;border:1px solid #a7e;">
        <h3>頭のマッサージ</h3>
        <img class="card-img-top" src="{{ asset('images/office/otameshi.jpg') }}" alt="otameshi" style="width:430px;">
    
        <h4>目が疲れた時は、頭のマッサージをしてみましょう。頭皮が固くなっていたら、疲労が蓄積している証拠です。<br>
        頭皮全体を柔らかくする様にマッサージしましょう。　<br>
        コツは優しくシャンプーするように指の腹で刺激することです。　<br>
        首の後ろやこめかみも軽く押すことで更なる効果が期待できます。</h4>
        </div>
            
  </div>
@endsection

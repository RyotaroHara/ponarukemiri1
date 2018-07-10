@extends('layouts.app')

@section('content')


<div class="row">
  <div class="col-4 col-md-1">
        <div class=a>
            @include('Exercise.commons.office')
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
            とばない
        </div>
            
  </div>
    
                        <li><a href="{{ route('office.office1') }}">小顔エクササイズ</a></li>
                        <li><a href="{{ route('office.office2') }}">ふくらはぎの引き締め</a></li>
                        <li><a href="{{ route('office.office3') }}">ふとももの引き締め</a></li>
                        <li><a href="{{ route('office.office4') }}">ヒップアップ</a></li>
                        <li><a href="{{ route('office.office5') }}">ウエストの引き締め</a></li>
                        <li><a href="{{ route('office.office6') }}">二の腕の引き締め</a></li>
                        <li><a href="{{ route('office.office7') }}">空気椅子</a></li>
                        <li><a href="{{ route('office.office8') }}">肩のストレッチ</a></li>
                        <li><a href="{{ route('office.office9') }}">頭のマッサージ</a></li>
                        <li><a href="{{ route('office.office10') }}">腹式呼吸</a></li>

   
@endsection

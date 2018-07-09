@extends('layouts.app')

@section('content')
    <h1>カフェテリア</h1>
    
    @if (Auth::check())
                        <li><a href="{{ route('cafeteria.cafeteria1') }}">カフェテリア1</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria2') }}">カフェテリア2</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria3') }}">カフェテリア3</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria4') }}">カフェテリア4</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria5') }}">カフェテリア5</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria6') }}">カフェテリア6</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria7') }}">カフェテリア7</a></li>
                        <li><a href="{{ route('cafeteria.cafeteria8') }}">カフェテリア8</a></li>


    @else
                        <li><a>このでぶが！</a></li>
    @endif

<a href="http://928bcb987a8146c1be58a3319ad7d4b7.vfs.cloud9.us-east-2.amazonaws.com/Exercise/office"><img src="https://www.homepage-tukurikata.com/image/hoge.jpg" alt="ほほほ" width="233" height="165" border="0" /></a>

@endsection

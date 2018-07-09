@extends('layouts.app')

@section('content')
    <h1>カフェテリア1</h1>
    
    @if (Auth::check())
                            
                        <li>歩きながら仕事する</a></li>

　　@else
                        <li>このでぶが！</li>
    
    @endif

@endsection

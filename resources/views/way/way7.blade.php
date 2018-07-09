@extends('layouts.app')

@section('content')
    <h1>移動中1</h1>
    
    @if (Auth::check())
                            
                        <li>歩きながら仕事するりさこ</a></li>

　　@else
                        <li>このでぶが！</li>
    
    @endif

@endsection

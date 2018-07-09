@extends('layouts.app')

@section('content')
    <h1>カフェテリア</h1>
    
    @if (Auth::check())
                        <li><a href="{{ route('cafeteria.cafeteria1') }}">カフェテリア1</a></li>
                        <li><a href="{{ route('Exercise.way') }}">移動中</a></li>
                        <li><a href="{{ route('Exercise.office') }}">OFFICE</a></li>


    @else
                        <li><a>このでぶが！</a></li>
    @endif

@endsection

@extends('layouts.app')

@section('content')
    <h1>移動中</h1>
    
　　@if (Auth::check())
                        <li><a href="{{ route('way.way1') }}">移動1</a></li>
                        <li><a href="{{ route('way.way2') }}">移動2</a></li>
                        <li><a href="{{ route('way.way3') }}">移動3</a></li>
                        <li><a href="{{ route('way.way4') }}">移動4</a></li>
                        <li><a href="{{ route('way.way5') }}">移動5</a></li>
                        <li><a href="{{ route('way.way6') }}">移動6</a></li>
                        <li><a href="{{ route('way.way7') }}">移動7</a></li>
                        <li><a href="{{ route('way.way8') }}">移動8</a></li>


    @else
                        <li>このでぶが！</li>
    @endif
@endsection

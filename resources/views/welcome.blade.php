@extends('layouts.app')
@section('content')
@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>OFFICEで健康ルンルンルン</h1>
                
 
                
                
                
                 @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Start Exercise</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>OFFICEで健康ルンルンルン</h1>
                 @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">エクササイズを始める</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
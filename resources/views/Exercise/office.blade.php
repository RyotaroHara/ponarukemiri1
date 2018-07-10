@extends('layouts.app')

@section('content')
    <h1>OFFICE</h1>
    @if (Auth::check())
                        <li><a href="{{ route('office.office1') }}">小顔になるエクササイズ</a></li>
                        <li><a href="{{ route('office.office2') }}">ふくらはぎの引き締め</a></li>
                        <li><a href="{{ route('office.office3') }}">ふとももの引き締め</a></li>
                        <li><a href="{{ route('office.office4') }}">ヒップアップ</a></li>
                        <li><a href="{{ route('office.office5') }}">ウエストの引き締め</a></li>
                        <li><a href="{{ route('office.office6') }}">二の腕の引き締め</a></li>
                        <li><a href="{{ route('office.office7') }}">空気椅子</a></li>
                        <li><a href="{{ route('office.office8') }}">肩のストレッチ</a></li>
                        <li><a href="{{ route('office.office9') }}">頭のマッサージ</a></li>
                        <li><a href="{{ route('office.office10') }}">腹式呼吸</a></li>

    @else
                        <li><a>このでぶが！</a></li>
    @endif
@endsection

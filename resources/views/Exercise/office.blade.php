@extends('layouts.app')

@section('content')
    <h1>OFFICE</h1>
    @if (Auth::check())
                        <li><a href="{{ route('office.office1') }}">オフィス1</a></li>
                        <li><a href="{{ route('office.office2') }}">オフィス2</a></li>
                        <li><a href="{{ route('office.office3') }}">オフィス3</a></li>
                        <li><a href="{{ route('office.office4') }}">オフィス4</a></li>
                        <li><a href="{{ route('office.office5') }}">オフィス5</a></li>
                        <li><a href="{{ route('office.office6') }}">オフィス6</a></li>
                        <li><a href="{{ route('office.office7') }}">オフィス7</a></li>
                        <li><a href="{{ route('office.office8') }}">オフィス8</a></li>


    @else
                        <li><a>このでぶが！</a></li>
    @endif
@endsection

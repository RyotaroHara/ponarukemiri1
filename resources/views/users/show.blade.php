@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->name, 100) . '&d=mm' }}" alt="" class="img-circle">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="status-label">目標消費カロリー</div>
                
                </li>
                <li>
                    <div class="status-label">' {{$user->Weight-$user->IdealWeight}}' kg減量まであと'{{($user->Weight-$user->IdealWeight)*7000 }} 'kcal！！</div>
                  
                </li>
            </ul>
        </div>
    </div>
@endsection

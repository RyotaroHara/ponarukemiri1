@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->email, 100) . '&d=mm' }}" alt="" class="img-circle">
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
                    <div class="status-label">' ' kg減量まであと' 'kcal！！</div>
                  
                </li>
            </ul>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
	<div class ="search">
		<div class="row">
			<div class="text-center">
{!! Form::open(['route' => 'items.battle', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                    BATTLE
                    </div>
            </div>
    </div>
@endsection

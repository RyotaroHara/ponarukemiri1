@extends('layouts.app')

@section('content')

@if(Auth::check())

<div class="row">
  <div class="col-4 col-md-1">
        <div class=link change>
            @include('battle.tab.normal.B_tab_office')
            @include('battle.tab.normal.B_tab_way')
            @include('battle.tab.present location.BP_tab_cafeteria')
        </div>
  </div>
  <div class="col-7 col-md-5">
        <div style="padding:10px;width:450px;height:570px;background:#FFD5EC;">
            {!! Form::open(['route' => 'battle.post']) !!}
            {!! Form::label('cal', 'カロリー') !!}
            {!! Form::number('cal', old('cal'), ['class' => 'form-control']) !!}
            <div class="text-right">
            {!! Form::submit('攻撃', ['class' => 'btn btn-success']) !!}
            </div>  
        {!! Form::close() !!}
        
        </div>
        
  </div>
  
  <div class="col-7 col-md-6">
        <div style="padding:10px;width:700px;height:570px;background:#EAD9FF;">
            
        </div>
            
  </div>
    
@endif

   

@endsection


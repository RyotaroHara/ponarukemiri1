@extends('layouts.app')

@section('content')
    
    <h1>Edit Information</h1>
    
    <div class="edit">
        <div class="col-xs-12">
            {!! Form::model($info, ['route' => ['users.update', $info->id], 'method' => 'put']) !!}
            <div class="content">
                {!! Form::label('Weight', '体重') !!}
                {!! Form::text('Weight', $info -> Weight) !!}
            </div>
            
            <div class="content">
                {!! Form::label('Idealweight','理想体重') !!}
                {!! Form::text('Idealweight', $info -> Idealweight) !!}
            </div>
            
            <div class="content">
                {!! Form::label('height','身長') !!}
                {!! Form::text('height', $info -> height) !!}
            </div>
            
            <div class="content">
                {!! Form::text('year', $info -> year) !!}
                {!! Form::label('year','年') !!}
            
                {!! Form::text('month', $info -> month) !!}
                {!! Form::label('month','月') !!}
            
                {!! Form::text('day', $info -> day) !!}
                {!! Form::label('day','日') !!}
            </div>
            
            
            {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
        
        
    </div>
    
    
    
    
@endsection

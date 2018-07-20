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
                {!! Form::label('fat', '体脂肪率(%)') !!}
                {!! Form::number('fat', $info->fat) !!}
            </div>
            <div class="content">
                {!! Form::label('ExerciseIntensity', '運動強度 （1＝ほぼ運動しない　　2＝週1～3回軽い運動する　
                3＝週3～5回運動する　　4＝アスリート並みの運動をする)') !!}
               <br> {!! Form::number('ExerciseIntensity', $info->ExerciseIntensity) !!}
            </div>

            <div class="content">
                {!! Form::label( '何日までにやせたい？') !!}<br>
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

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">ユーザー登録</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group ">
                        {!! Form::label('name', 'ユーザー名') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-xs-6">
                        {!! Form::label('sex', '性別  (・1,male  ・2,female)') !!}
                        {!! Form::number('sex', old('sex'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-xs-6">
                        {!! Form::label('age', '年齢') !!}
                        {!! Form::number('age', old('age'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('height', '身長') !!}
                        {!! Form::number('height', old('height'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group col-xs-6 ">
                        {!! Form::label('Weight', 'Weight') !!}
                        {!! Form::number('Weight', old('Weight'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-xs-6">
                        {!! Form::label('IdealWeight', 'IdealWeight') !!}
                        {!! Form::number('IdealWeight', old('IdealWeight'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group　col-xs-6 ">
                        {!! Form::label('date', '何日までにやせたい？') !!}
                    </div>
            
                    <div class="form-group col-xs-4">
                        {!! Form::label('year', 'year') !!}
                        {!! Form::number('year', old('year'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-xs-4">
                        {!! Form::label('month', 'month') !!}
                        {!! Form::number('month', old('month'), ['class' => 'form-control']) !!}
                    </div>    
                    <div class="form-group col-xs-4">
                        {!! Form::label('day', 'day') !!}
                        {!! Form::number('day', old('day'), ['class' => 'form-control']) !!}
                    </div>    
                    

                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                                        
                    <div class="text-right">
                        {!! Form::submit('登録する', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

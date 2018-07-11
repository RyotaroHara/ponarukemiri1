@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">ユーザー登録</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'ユーザー名') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Weight', 'Weight') !!}
                        {!! Form::number('Weight', old('Weight'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('IdealWeight', 'IdealWeight') !!}
                        {!! Form::number('IdealWeight', old('IdealWeight'), ['class' => 'form-control']) !!}
                    </div>                    


                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    
                    
                    <div class="form-group">
                        {!! Form::label('date', '何日まで？') !!}

                        <form method=post action="<?=$_SERVER["PHP_SELF"]?>">
　                        　<table>
                                <tr>
                                    <td>
                                        <select name= "yyyy"> ;
                                            <?php
                                                //年
                                                      for ($i =2005; $i <=2020; $i++) {
                                                      echo "<option>$i";
                                                      }
                                                      echo "</select>年"; 

                                                //月
                                                      echo "<select name= \"mm\">" ;
                                                      for ($i =1; $i <=12; $i++) {
                                                      echo "<option>$i";
                                                      }
                                                      echo "</select>月";


                                                //日
                                                      echo "<select name= \"dd\">" ;
                                                      for ($i =1; $i <=31; $i++) {
                                                      echo "<option>$i";
                                                      }
                                                      echo "</select>日";
                                            ?>
                                    </td>
                                </tr>
                            </table>
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

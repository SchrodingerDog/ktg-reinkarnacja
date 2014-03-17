@extends('layouts.main')

@section('content')
    <h2>Zaloguj się</h2>
        {{Form::open(['route'=>'user.POSTlogin']);}}
            <div class="form-group @if ($errors->has('login')) has-error @endif">
                {{Form::label('login', 'Login', $attributes = array('class'=>'control-label'));}}
                {{Form::text('login',$value = Input::old('login'), $attributes = array('class'=>'form-control'));}}
                @if ($errors->has('login'))
                    <span class="help-block">{{$errors->first('login')}}</span>
                @endif
            </div>
            <div class="form-group @if ($errors->has('password')) has-error @endif">
                {{Form::label('password', 'Password', $attributes = array('class'=>'control-label'));}}
                {{Form::password('password', $attributes = array('class'=>'form-control'));}}
                @if ($errors->has('password'))
                    <span class="help-block">{{$errors->first('password')}}</span>
                @endif
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj</button>
        {{Form::close();}}
@stop
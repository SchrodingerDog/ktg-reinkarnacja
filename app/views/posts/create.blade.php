@extends('layouts.main')

@section('content')
	{{Form::open(['route'=>'post.store']);}}
	
	<div class="form-group @if ($errors->has('title')) has-error @endif">
		{{Form::label('title', 'Tytuł', $attributes = array('class'=>'control-label'));}}
		{{Form::text('title',$value = Input::old('title'), $attributes = array('class'=>'form-control'));}}
		@if ($errors->has('title'))
			<span class="help-block">{{$errors->first('title')}}</span>
		@endif
	</div>

	<div class="form-group @if ($errors->has('content')) has-error @endif">
		{{Form::label('content', 'Treść', $attributes = array('class'=>'control-label'));}}
		{{Form::textarea('content',$value = Input::old('content'), $attributes = array('class'=>'form-control'));}}
		@if ($errors->has('content'))
			<span class="help-block">{{$errors->first('content')}}</span>
		@endif
	</div>
	<button type="submit" class="btn btn-default">Stwórz</button>
	{{Form::close();}}
@stop
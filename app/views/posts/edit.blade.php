@extends('layouts.main')
@section('title')
	<title>Edycja</title>
@stop
@section('content')
	{{Form::open(array('route' => array('post.update', $post->id), 'method'=>'PUT'));}}
	
	<div class="form-group @if ($errors->has('title')) has-error @endif">
		{{Form::label('title', 'Tytuł', $attributes = array('class'=>'control-label'));}}
		{{Form::text('title',$value = $post->title, $attributes = array('class'=>'form-control'));}}
		@if ($errors->has('title'))
			<span class="help-block">{{$errors->first('title')}}</span>
		@endif
	</div>

	<div class="form-group @if ($errors->has('content')) has-error @endif">
		{{Form::label('content', 'Treść', $attributes = array('class'=>'control-label'));}}
		{{Form::textarea('content',$value = $post->content , $attributes = array('class'=>'form-control'));}}
		@if ($errors->has('content'))
			<span class="help-block">{{$errors->first('content')}}</span>
		@endif
	</div>
	<button type="submit" class="btn btn-default">Zapisz</button>
	{{Form::close();}}
@stop
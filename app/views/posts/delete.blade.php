@extends('layouts.main')

@section('content')
	{{Form::open(array('route' => array('post.destroy', $post->id), 'method'=>'DELETE'));}}
		<div class="alert alert-danger">Jeśli klikniesz usuń ten post na prawdę zostanie usunięty. Czay na pewno tego chesz?</div>
		<button type="submit" class="btn btn-default">Usuń</button>
		<a href="{{ URL::route('post.index'); }}">Wróć</a>
	{{Form::close();}}
@stop
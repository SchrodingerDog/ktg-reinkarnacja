@extends('layouts.main')

@section('content')
	<a href="{{ URL::route('post.index') }}" class="btn btn-success">Panel postów</a>
	<a href="{{ URL::route('user.create') }}" class="btn btn-success">Nowy admin</a>
@stop
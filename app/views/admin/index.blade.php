@extends('layouts.main')

@section('content')

	<div class="btn-group">
	  <a href="{{ URL::route('post.index') }}" type="button" class="btn btn-success">Panel postów</a>
	  <!-- <button type="button" class="btn btn-danger">Panel postów</button> -->
	  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
	    <span class="caret"></span>
	    <span class="sr-only">Toggle Dropdown</span>
	  </button>
	  <ul class="dropdown-menu" role="menu">
	    <li><a href="{{ URL::route('post.create') }}">Utwórz nowy post</a></li>
	  </ul>
	</div>
	<a href="{{ URL::route('user.create') }}" class="btn btn-success">Nowy admin</a>
@stop
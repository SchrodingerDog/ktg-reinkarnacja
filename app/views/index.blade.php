@extends('layouts.main')

@section('content')
	@if ($posts->count())
		@foreach ($posts as $post)
	    	
	    	<div class="panel panel-primary">
				<div class="panel-heading">{{ $post->title }}</div>
				<div class="panel-body">{{ $post->content }}</div>
				<div class="panel-footer text-right">{{ $post->created_at }}</div>
			</div>
			
		@endforeach
	@else
		
		<div class="alert alert-danger">Niestety, nie ma postów</div>	
		
	@endif
@stop
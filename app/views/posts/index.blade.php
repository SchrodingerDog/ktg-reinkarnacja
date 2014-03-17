@extends('layouts.main')

@section('content')
	<a href="{{ URL::route('post.create') }}" class="btn btn-success moved">Stwórz nowy</a>
	@if ($posts->count())
		@foreach ($posts as $post)
	    	
	    	<div class="panel panel-primary">
				<div class="panel-heading">{{ $post->title }}</div>
				<div class="panel-body">{{ $post->content }}</div>
				<div class="panel-footer">
					<div class="text-right">{{ $post->created_at }}</div>
					<div class="text-left">
						<a href="{{ URL::route('post.edit', $post->id) }}" class="btn btn-info">Edytuj</a>
						<a href="{{ URL::route('post.delete', $post->id) }}" class="btn btn-danger">Usuń</a>
					</div>
				</div>
			</div>
			
		@endforeach
	@else
		
		<div class="alert alert-danger moved">Niestety, nie ma postów</div>	
		
	@endif
@stop
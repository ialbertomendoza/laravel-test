@extends('layouts.default')

@section('content')

	<h1>Editar post</h1>

	@include('partials.errors')

	<form action="{{ route('post_patch_path', $post->id) }}" method="post">

		{{ csrf_field() }}

		<input type="hidden" name="_method" value="patch">

		<label for="title">Título</label>
		<input type="text" name="title" value="{{ $post->title }}" class="">

		<label for="body">Contenido</label>
		<textarea name="body" id="body" cols="30" rows="10" class="">{{ $post->body }}</textarea>
		
		<input class="btn btn-primary" type="submit" value="Guardar">
	</form>

@stop
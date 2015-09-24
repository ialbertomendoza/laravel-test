@extends('layouts.default')

@section('content')

	<h1>Crear post</h1>

	@include('partials.errors')

	<form action="{{ route('post_create_path') }}" method="post">

		{{ csrf_field() }}

		<label for="title">Título</label>
		<input type="text" name="title" value="{{ old('title') }}" class="">

		<label for="body">Contenido</label>
		<textarea name="body" id="body" cols="30" rows="10" class="">{{ old('body') }}</textarea>
		
		<input class="btn btn-primary" type="submit" value="Crear post">
	</form>

@stop
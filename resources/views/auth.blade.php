@extends('layouts.default')

@section('content')

	<h1>Iniciar sesión</h1>

	@foreach( $errors->all() as $error )
		{{ $error }}
	@endforeach

	<form class="{{ route('auth_store_path') }}" action="" method="post">
		<!--<input type="hidden" value="_token" value="{{ csrf_token() }}">-->
		{{ csrf_field() }}
		<label for="email"></label>
		<input class="form-control" type="text" name="email" value="">
		<label for="password"></label>
		<input class="form-control" type="password" name="password">
		<input class="btn-primary" type="submit" value="Iniciar">
	</form>

@stop
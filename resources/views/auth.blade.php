@extends('layouts.default')

@section('content')

	<h1>Iniciar sesión</h1>

	@if($errors->has())
		<div class="alert alert-danger">
			<ul class="list-unstyled">
			@foreach( $errors->all() as $error )
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif

	<form class="{{ route('auth_store_path') }}" action="" method="post">
		{{ csrf_field() }}
		<label for="email"></label>
		<input class="form-control" type="text" name="email" value="">
		<label for="password"></label>
		<input class="form-control" type="password" name="password">
		<input class="btn-primary" type="submit" value="Iniciar">
	</form>

@stop
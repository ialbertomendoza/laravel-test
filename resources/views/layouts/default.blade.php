<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ elixir("css/app.css") }}">
	<title>Main Pj</title>
</head>
<body>
	<div class="container">
		@if($currentUser)
			Hola {{ $currentUser->name }}, 
			<a href="{{ route('auth_destroy_path') }}">Salir</a>
		@else
			<a href="{{ route('auth_show_path') }}">Iniciar sesión</a>
		@endif
		@yield('content')
	</div>
</body>
</html>


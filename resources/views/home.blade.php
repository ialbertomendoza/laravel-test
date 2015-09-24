@extends('layouts.default')

@section('content')
    <h1>Posts</h1>
    <a class="btn btn-primary" href="{{ route('post_create_path') }}">Crear post</a>
    <hr>
    <ul>
    @foreach($posts as $post)
    	<li>
    		<a href="{{ route("post_show_path", $post->id) }}">{{ $post->title }}</a>
    		- {{ $post->author->name }}
    	</li>
    @endforeach
    </ul>
@stop
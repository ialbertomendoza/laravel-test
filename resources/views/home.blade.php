@extends('layouts.default')

@section('content')
    <h1>Posts</h1>
    <ul>
    @foreach($posts as $post)
    	<li>
    		<a href="{{ route("post_show_path", $post->id) }}">{{ $post->title }}</a>
    		- {{ $post->author->name }}
    	</li>
    @endforeach
    </ul>
@stop
@extends('layouts.default')

@section('content')
    <h1>Posts</h1>
    <ul>
    @foreach($posts as $post)
    	<li>{{ $post->name }} - {{ $post->author->name }}</li>
    @endforeach
    </ul>
@stop
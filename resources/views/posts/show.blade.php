@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p><strong>Latitude:</strong> {{ $post->latitude }}</p>
    <p><strong>Longitude:</strong> {{ $post->longitude }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection

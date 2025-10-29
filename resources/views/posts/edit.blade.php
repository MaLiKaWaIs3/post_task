@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input name="title" value="{{ old('title', $post->title) }}" class="form-control">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $post->description) }}</textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Latitude</label>
            <input name="latitude" value="{{ old('latitude', $post->latitude) }}" class="form-control">
            @error('latitude') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Longitude</label>
            <input name="longitude" value="{{ old('longitude', $post->longitude) }}" class="form-control">
            @error('longitude') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary" style="margin-left: .5rem;">Cancel</a>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Title</label>
            <input name="title" value="{{ old('title') }}" class="form-control">
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            @error('description') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Latitude</label>
            <input name="latitude" value="{{ old('latitude') }}" class="form-control">
            @error('latitude') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label>Longitude</label>
            <input name="longitude" value="{{ old('longitude') }}" class="form-control">
            @error('longitude') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection

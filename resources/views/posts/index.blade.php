@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($posts->count())
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ \Illuminate\Support\Str::limit($post->description, 50) }}</td>
                <td>{{ $post->latitude }}</td>
                <td>{{ $post->longitude }}</td>
                <td>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No posts yet.</p>
    @endif
</div>
@endsection

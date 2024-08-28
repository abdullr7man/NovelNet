@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{ $post['title'] }}</h1>
    <div class="mb-3">
        <p><strong>Content:</strong> {{ $post['body'] }}</p>
        <p><strong>Created At:</strong> {{ $post['created_at'] }}</p>
        <p><strong>Updated At:</strong> {{ $post['updated_at'] }}</p>
    </div>
    <div class="actions">
        <a href="/posts/{{ $post['id'] }}/edit" class="btn btn-primary">Edit Post</a>
        <a href="/posts" class="btn btn-secondary">Back To Posts</a>

        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

@endsection
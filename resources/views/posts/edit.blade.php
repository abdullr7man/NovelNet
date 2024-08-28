@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}">
        </div>
        <div class="form-group">
            <label for="body">Content</label>
            <textarea class="form-control" id="body" name="body" rows="5">{{ $post['body'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    
    @if($errors->any())
        <div class="alert alert-danger mt-3">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <a href="/posts" class="btn btn-secondary mt-3">Back to Posts</a>
</div>

@endsection
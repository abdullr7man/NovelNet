@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="The Title" required>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" placeholder="The Body" required>
        </div>
        <button type="submit" class="btn btn-success">Create Post</button>
    </form>
    <br>
    <a href="/posts" class="btn btn-secondary">Back to Posts</a>
</div>


@endsection
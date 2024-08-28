@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Posts</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->user->name }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">View</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $posts->onEachSide(1)->links('vendor.pagination.simple-bootstrap-4') }}
    </div>
</div>

    <a href="/posts/create" class="btn btn-success">Create New Post</a>
</div>

@endsection

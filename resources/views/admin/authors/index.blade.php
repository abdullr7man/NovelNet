@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('admin.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9  animated-title">
            <h2>Authors</h2>
            <a href="{{ route('authors.create') }}" class="btn btn-outline-primary mb-3">Add New Author</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>{{ $author->name }}</td>
                            <td>
                                <a href="{{ route('authors.show', $author->id) }}" class="btn btn-outline-info btn-sm">Show</a>
                                <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-outline-success btn-sm">Edit</a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="d-flex justify-content-center">
                {{ $authors->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

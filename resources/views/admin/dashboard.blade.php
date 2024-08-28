@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                    Dashboard
                </a>
                <a href="{{ route('admin.books.index') }}" class="list-group-item list-group-item-action">
                    Books
                </a>
                <a class="list-group-item list-group-item-action" href="{{ route('authors.index') }}">
                    Authors
                </a>
                <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                    Users
                </a>
                <a href="{{ route('admin.borrowed.index') }}" class="list-group-item list-group-item-action">
                    Borrowed Books
                </a>
                <!-- Add more links as needed -->
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9 animated-title">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <p>Welcome to the Admin Dashboard!</p>

                    <!-- Add New Book Button -->
                    <a href="{{ route('admin.books.create') }}" class="btn btn-outline-primary mb-3">Add New Book</a>

                    <!-- Books Table -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>
                                        <!-- Edit Book Button -->
                                        <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-outline-warning">Edit</a>

                                        <!-- Delete Book Form -->
                                        <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this book?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

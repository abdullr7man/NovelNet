@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('admin.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9 animated-title">
            <h2>Borrowed Books</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Book</th>
                        <th>Borrowed At</th>
                        <th>Return Due Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borrowedBooks as $borrow)
                        <tr>
                            <td>{{ $borrow->id }}</td>
                            <td>{{ $borrow->user->name }}</td>
                            <td>{{ $borrow->book->title }}</td>
                            <td>{{ $borrow->borrowed_at }}</td>
                            <td>{{ $borrow->return_due_date }}</td>
                            <td>
                                <!-- Add Delete Form -->
                                <form action="{{ route('borrowed.destroy', $borrow->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this borrowed book record?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $borrowedBooks->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

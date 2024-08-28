@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <h2>User Details</h2>
    <div class="card">
        <div class="card-header">User ID: {{ $user->id }}</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <!-- Add other user details here -->
        </div>
    </div>

    <h3 class="mt-4">Borrow History</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Title</th>
                <th>Borrowed At</th>
                <th>Return Due Date</th>
                <th>Returned At</th>
            </tr>
        </thead>
        <tbody>
            @forelse($borrowHistory as $borrow)
                <tr>
                    <td>{{ $borrow->id }}</td>
                    <td>{{ $borrow->book->title }}</td>
                    <td>{{ $borrow->borrowed_at }}</td>
                    <td>{{ $borrow->return_due_date }}</td>
                    <td>{{ $borrow->returned_at ?? 'Not Returned' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No borrow history available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary mt-3">Back to Users</a>
</div>
@endsection

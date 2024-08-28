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
            <h2>Users</h2>

            <!-- Search form for User ID -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <form class="d-flex" action="{{ route('admin.users.index') }}" method="GET">
                        <input class="form-control me-2" type="search" placeholder="Search by User ID..." aria-label="Search" name="search" value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <!-- Users Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-outline-success">View</a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $users->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

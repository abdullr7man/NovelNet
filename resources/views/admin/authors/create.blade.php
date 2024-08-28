@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @include('admin.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <h2>Add New Author</h2>

            <form action="{{ route('authors.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Author Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="name">Author Bio</label>
                    <input type="text" class="form-control" id="name" name="bio" required>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

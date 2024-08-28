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
            <h2>Edit Author</h2>

            <form action="{{ route('authors.update', $author->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Author Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
                </div>
                <button type="submit" class="btn btn-outline-success">Save</button>
                <a href="{{ route('authors.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection

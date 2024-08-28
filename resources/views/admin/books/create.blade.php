@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Book') }}</div>

                <div class="card-body">
                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Book Creation Form -->
                    <form action="{{ route('admin.books.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="poster">Book Poster</label>
                            <input type="file" name="poster" id="poster" class="form-control">
                        </div><br>


                        <button type="submit" class="btn btn-primary">Add Book</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

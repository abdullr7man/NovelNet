@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Book') }}</div>

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

                    <!-- Book Edit Form -->
                    <form action="{{ route('admin.books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $book->title) }}" required>
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="poster">Book Poster</label>
                            <input type="file" name="poster" id="poster" class="form-control">
                            @if($book->poster)
                                <p>Current Poster: <strong>{{ $book->poster_name }}</strong></p>
                            @endif
                        </div>
                            <br>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $book->description) }}</textarea>
                        </div>
                            <br>
                        <button type="submit" class="btn btn-outline-primary">Update Book</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary">Back to Dashboard</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <h1>Authors</h1>
    <div class="row">
        @foreach($authors as $author)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <!-- Link with no styling -->
                        <a href="{{ route('authors.show', $author->id) }}" class="no-style-link">
                            <h5 class="card-title">{{ $author->name }}</h5>
                        </a>
                        <p class="card-text">Books Written: {{ $author->books_count }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

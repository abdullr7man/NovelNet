@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <h1>{{ $author->name }}</h1>
    <p><strong>Total Books:</strong> {{ $author->books->count() }}</p>

    <h3>Bio</h3>
    <p> {{ $author->bio }}</p>

    <h3>Books by {{ $author->name }}</h3>
    <ul>
        @foreach($author->books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home.authors') }}" class="btn btn-outline-secondary">Back to Authors</a>
</div>
@endsection

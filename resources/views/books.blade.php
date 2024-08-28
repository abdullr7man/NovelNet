@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <h1>Novels</h1>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 200px;">
                    @if($book->poster_name)
                    <img src="{{ asset('storage/posters/'.$book->poster_name) }}" class="card" alt="{{ $book->title }}" style="width:200px; height:320px;">
                @endif
                    <div class="card-body">
                        <!-- Link with no styling -->
                        <a href="{{ route('books.show', $book->id) }}" class="no-style-link">
                            <h5 class="card-title">{{ $book->title }}</h5>
                        </a>
                        <p class="card-text">Author: {{ $book->author }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

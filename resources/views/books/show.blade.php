@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $book->title }}</div>

                <div class="card-body">
                    @if($book->poster_name)
                    <img src="{{ asset('storage/posters/'.$book->poster_name) }}" class="card" alt="{{ $book->title }}" style="width:200px; height:320px;">
                    @endif
                    <p><strong>Author:</strong> {{ $book->author }}</p>
                    <p><strong>Description:</strong> {{ $book->description }}</p>

                    <!-- Borrow Button -->
                    <form action="{{ route('borrow.store') }}" method="POST" id="borrowForm">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <button type="button" class="btn btn-outline-info" onclick="confirmBorrow()">Borrow This Novel</button>
                        <a href="{{ route('home.books')}}" class="btn btn-outline-secondary">Back To Novels</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmBorrow() {
        if (confirm('You will have this book for 2 weeks. Do you want to proceed?')) {
            document.getElementById('borrowForm').submit();
        }
    }
</script>
@endsection

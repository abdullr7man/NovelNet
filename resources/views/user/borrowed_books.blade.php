@extends('layouts.app')

@section('content')
<div class="container animated-title">
    <h1>Your Borrowed Books</h1>

    @if($borrowedBooks->isEmpty())
        <p>You have not borrowed any books yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Borrowed On</th>
                    <th>Return By</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowedBooks as $borrowing)
                    <tr>
                        <td>{{ $borrowing->book->title }}</td>
                        <td>{{ $borrowing->created_at->format('M d, Y') }}</td>
                        <td>{{ $borrowing->created_at->addWeeks(2)->format('M d, Y') }}</td> <!-- Assuming a 2-week borrowing period -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

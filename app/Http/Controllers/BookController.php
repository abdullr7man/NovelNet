<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        // Find the book by ID
        $book = Book::findOrFail($id);

        // Pass the book to the view
        return view('books.show', compact('book'));
    }
}


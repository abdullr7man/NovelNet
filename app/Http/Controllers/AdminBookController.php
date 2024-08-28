<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);

        return view('admin.dashboard', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'poster' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string|',
            'author_id' => 'nullable|exists:authors,id',
        ]);
        // Handle the file upload
        $posterPath = null;
        $posterName = null;
        if ($request->hasFile('poster')) {
            $posterFile = $request->file('poster');
            $posterName = $posterFile->getClientOriginalName(); // Get the original file name
            $posterPath = $posterFile->storeAs('posters', $posterName, 'public'); // Store with the original name
        }

        Book::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'poster_name' => $posterName, // Save the poster name
            'description' => $request->input('description'),
        ]);
        return redirect()->route('admin.books.index')->with('success', 'Book added successfully.');
    }

    public function edit(Book $book)
    {
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $book->update($request->all());

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully.');
    }
}


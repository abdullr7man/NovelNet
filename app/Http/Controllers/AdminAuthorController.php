<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    public function index()
    {
        $authors = Author::paginate(10);
        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Author::create($request->all());

        return redirect()->route('authors.index')->with('success', 'Author created successfully.');
    }

    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('success', 'Author updated successfully.');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author deleted successfully.');
    }
    public function show($id)
    {
        $author = Author::findOrFail($id);

        return view('admin.authors.show', compact('author'));
    }
}


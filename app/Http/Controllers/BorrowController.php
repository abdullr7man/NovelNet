<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BorrowController extends Controller
{
    public function store(Request $request)
    {
        // Create a new borrow record
        Borrow::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'borrowed_at' => now(),
            'return_due_date' => now()->addDays(14),
        ]);

        return redirect()->route('books.show', $request->book_id)->with('success', 'Book borrowed successfully!');
    }
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Get the borrowed books for this user
        $borrowedBooks = Borrow::with('book')
            ->where('user_id', $user->id)
            ->whereNull('returned_at') // Optionally, you can filter out returned books
            ->get();

        return view('user.borrowed_books', compact('borrowedBooks'));
    }
}

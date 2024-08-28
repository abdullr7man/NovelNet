<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);

        return view('admin.dashboard', compact('books'));
    }
}

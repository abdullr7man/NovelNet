<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('index',);
    }
    public function books(Request $request)
    {
        $search = $request->input('search');

        // Fetch books based on the search query
        $books = Book::where('title', 'like', '%' . $search . '%')->paginate(10);

        return view('books', compact('books'));
    }
        public function authors(){
            $authors = Author::withCount('books')->get(); // Fetch authors with the count of books
            return view('authors', compact('authors'));
    }
    public function comunity(){
        return view("comunity");
    }
    public function about(){
        return view("about-us");
    }
    public function contact(){
        return view("contact-us");
    }
    public function search(){
        return view("search");
    }

}

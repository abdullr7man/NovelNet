<?php
namespace App\Http\Controllers;

use App\Models\Borrow;
use Illuminate\Http\Request;

class AdminBorrowedController extends Controller
{
    public function index()
    {
        $borrowedBooks = Borrow::with('user', 'book')->paginate(10);
        return view('admin.borrowed.index', compact('borrowedBooks'));
    }
    public function destroy($id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->delete();

        return redirect()->route('admin.borrowed.index')->with('success', 'Borrowed book record deleted.');
    }
}


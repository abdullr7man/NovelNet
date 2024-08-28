<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show the list of users
    public function index()
    {
        $users = User::paginate(10); // Adjust the number of users per page if needed
        return view('admin.users.index', compact('users'));
    }

    // Show details of a single user
    public function show(User $user)
    {
        // Fetch borrow history for the user
        $borrowHistory = $user->borrows()->with('book')->get();

        return view('admin.users.show', [
            'user' => $user,
            'borrowHistory' => $borrowHistory,
        ]);
    }


    // Show the form for creating a new user (if applicable)
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a newly created user in storage (if applicable)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // Add validation rules as needed
        ]);

        User::create($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Show the form for editing the specified user (if applicable)
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update the specified user in storage (if applicable)
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add validation rules as needed
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    // Remove the specified user from storage
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}

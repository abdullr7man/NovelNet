<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Display a listing of the posts
    public function index()
    {
        $posts = Post::paginate(5);
        return view('posts.index', ['posts' => $posts]);
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $request->merge(['user_id' => auth()->id()]);
        $post = Post::create($request->all());

        return redirect('/posts')->with('success', 'Post created successfully!');
    }

    // Display the specified post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    // Show the form for editing the specified post
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', ['post' => $post]);
    }

    // Update the specified post in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

    // Remove the specified post from storage
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }
}

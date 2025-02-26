<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blog.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:10',
            'slug' => 'required|min:10',
            'body' => 'required|min:10'
        ]);

        Post::create($validated);

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $blog)
    {
        return view('blog.show', ['post' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog)
    {
        return view('blog.edit', ['post' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $blog)
    {
        $validated = $request->validate([
            'title' => 'required|min:10',
            'slug' => 'required|min:10',
            'body' => 'required|min:10'
        ]);

        $blog->update($validated);

        session()->flash('success', 'successfully updated');

        return redirect()->route('blog.show', ['blog' => $blog]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index', ['posts' => Post::all()]);
    }
}

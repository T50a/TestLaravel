<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(PostRequest $request)
    {
        $post = Post::create($request->validated());
        return redirect("/posts/{$post->id}");
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', compact('post'));
    }

    public function update(PostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->validated());
        return view('post.show', compact('post'));
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('posts.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function show(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('posts.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('posts.index');
    }

    public function delete(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('posts.delete', compact('post'));
    }
}

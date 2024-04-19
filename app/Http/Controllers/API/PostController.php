<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Faculty;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index(): Factory|View|Application
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        $faculties = Faculty::all();
        return view('post.create' , compact('faculties'));
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('post.edit', compact('post'));
    }

    public function update(UpdateRequest $request, Post $post): RedirectResponse
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('post.index');
    }

    public function delete(Post $post): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('post.delete', compact('post'));
    }
}

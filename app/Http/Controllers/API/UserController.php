<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('user.index', compact('posts'));
    }

    public function applyForm(Post $post)
    {
        return view('user.apply', compact('post'));
    }

    public function task()
    {
        return view('user.task');
    }
}

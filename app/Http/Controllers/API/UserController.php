<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function applyForm(int $post)
    {
        return view('user.apply', compact('post'));
    }
}

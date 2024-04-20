<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $posts = Post::all();
        return view('user.index', compact('posts'));
    }

    public function applyForm(Post $post)
    {
        return view('user.apply', compact('post'));
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function editProfile()
    {
        return view('user.profile_edit');
    }

    public function task()
    {
        return view('user.task');
    }

    public function apply(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        foreach ($data as $key => $value) {
            $this->userService->uploadDocs(auth()->id(), $value, $key);
        }
        return redirect()->route('applicant.task');
    }
}

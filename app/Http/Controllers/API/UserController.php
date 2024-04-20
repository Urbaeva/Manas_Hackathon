<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\SendNotificationJob;
use App\Models\Application;
use App\Models\Notification;
use App\Models\Post;
use App\Models\Upload;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function uploadDoc(Request $request, Upload $upload)
    {
        $data = $request->validate(['file' => 'required']);
        $file_path = Storage::disk('public')->putFile('docs', $data['file']);
        $upload->update(['file_path' => $file_path, 'status' => 1]);
        return redirect()->route('applicant.task');
    }
    public function apply(Request $request, Post $post)
    {
        $data = $request->all();
        unset($data['_token']);
        $d_ids = [];
        foreach ($data as $key => $value) {
            $d_ids[] = $key;
            $this->userService->uploadDocs(auth()->id(), $value, $key);
        }

        $required_docs = $post->documents;
        foreach ($required_docs as $doc) {
            if(!in_array($doc->id, $d_ids)) {
                Upload::query()->create([
                    'user_id' => auth()->id(),
                    'document_id' => $doc->id,
                    'status' => 0
                ]);
            }
        }

        Application::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id
        ]);
        $notification = Notification::create([
            'user_id' => auth()->id(),
            'message' => "Сиз $post->name катталдыңыз \n Керектүү документтерди жүктөөнү унутпаңыз"
        ]);
        SendNotificationJob::dispatch(auth()->user(), $notification);
        return redirect()->route('applicant.task');
    }

    public function rating(Post $post)
    {
        $post->load(['applications.user' => function ($query) {
            $query->orderBy('score', 'desc');
        }]);
        return view('user.rating', compact('post'));
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\StoreRequest;
use App\Http\Requests\Exam\UpdateRequest;
use App\Models\Application;
use App\Models\Exam;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExamController extends Controller
{
    public function index(Post $post)
    {
        $applications = Application::all();
        return view('exam.index', compact('post', 'applications'));
    }


    public function create()
    {
        return view('exam.create');
    }

    public function store(StoreRequest $request, Application $application)
    {
        $data = $request->validated();
        $data['user_id'] = $application->user->id;
        $data['post_id'] = $application->post->id;
        $data['exam_file'] = Storage::disk('public')->putFile('exam_files', $data['exam_file']);
        Exam::create($data);
        return redirect()->back();
    }

    public function show(Exam $exam)
    {

    }

    public function edit(Exam $exam)
    {
        return view('exam.edit', compact('exam'));
    }

    public function update(UpdateRequest $request, Exam $exam)
    {
        $data = $request->validated();
        $exam->update($data);
        return redirect()->route('exams.index');
    }

    public function delete(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Exam\StoreRequest;
use App\Http\Requests\Exam\UpdateRequest;
use App\Models\Exam;
use App\Models\Post;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index(Post $post)
    {

        return view('exam.index', compact('post'));
    }


    public function create()
    {
        return view('exam.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Exam::create($data);
        return redirect()->route('exams.index');
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

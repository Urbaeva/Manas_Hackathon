<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Post;
use App\Models\Score;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index()
    {
        $current_user = auth()->user();
        $post = Post::query()->where('faculty_id', $current_user->faculty_id)->first();
        $applications = $post ? $post->applications : [];
        return view('commissions.index', compact('applications'));

    }

    public function check(Application $application)
    {
        return view('commissions.check', compact('application'));
    }

    public function storeCheck(Request $request, Application $application)
    {
        $data = $request->validate(['score' => 'required|numeric']);
        Score::query()->create([
            'score' => $data['score'],
            'exam_id' => $application->user->exams->first()->id,
            'commission_id' => auth()->id()
        ]);
        return redirect()->route('commission.index');
    }
}

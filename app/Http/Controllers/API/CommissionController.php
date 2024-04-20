<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Post;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function index()
    {
        $current_user = auth()->user();
        $applications = Post::query()->where('faculty_id', $current_user->faculty_id)->first()->applications;
        return view('commissions.index', compact('applications'));

    }

    public function check(Application $application)
    {
        return view('commissions.check', compact('application'));
    }
}

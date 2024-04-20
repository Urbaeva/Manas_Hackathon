<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();
        return view('application.index', compact('applications'));
    }

    public function show(Application $application)
    {
        return view('application.show', compact('application'));
    }
}

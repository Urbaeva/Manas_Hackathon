<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Faculty\StoreRequest;
use App\Http\Requests\Faculty\UpdateRequest;
use App\Models\Faculty;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FacultyController extends Controller
{
    public function index(): Factory|Application|View
    {
        $faculties = Faculty::all();
        return view('faculty.index', compact('faculties'));
    }

    public function create(): Factory|Application|View
    {
        return view('faculty.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        Faculty::create($data);
        return redirect()->route('faculty.index');
    }

    public function edit(): Factory|\Illuminate\Foundation\Application|View|Application
    {
        return view('faculty.edit');
    }

    public function update(UpdateRequest $request, Faculty $faculty): RedirectResponse
    {
        $data = $request->validated();
        $faculty->update($data);
        return redirect()->route('faculty.index');
    }

    public function delete(Faculty $faculty): RedirectResponse
    {
        $faculty->delete();
        return redirect()->route('faculty.index');
    }
}

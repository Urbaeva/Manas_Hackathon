<?php

namespace App\Services;

use App\Models\Faculty;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class FacultyService
{

    public function getFacultyList(): Factory|Application|View
    {
        $faculties = Faculty::all();
        return view('faculty.index', compact('faculties'));
    }

    public function create($data)
    {

    }

    public function update($data)
    {

    }

    public function delete($id)
    {

    }

}

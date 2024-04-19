<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Document\StoreRequest;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('documents.index', compact('documents'));
    }


    public function create()
    {
        return view('documents.create');
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Document::create($data);
        return redirect()->route('documents.index');
    }
}

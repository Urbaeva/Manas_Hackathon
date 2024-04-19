<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'name_tr' => 'required|string',
            'description' => 'required|string',
            'description_tr' => 'required|string',
            'faculty_id' => 'required|integer|exists:faculties,id',
            'deadline' => 'required|date',
        ];
    }
}

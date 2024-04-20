<?php

namespace App\Services;

use App\Models\Upload;
use Illuminate\Support\Facades\Storage;

class UserService
{
    public function uploadDocs(int $user_id, $doc, $document_id)
    {
        $uploaded_file = Upload::query()->where('user_id', $user_id)
            ->where('document_id', $document_id)->first();
        if(!$uploaded_file)
        {
            $file_path = Storage::disk('public')->putFile('docs', $doc);
            Upload::query()->create([
                'user_id' => $user_id,
                'document_id' => $document_id,
                'file_path' => $file_path,
                'status' => 1
            ]);
        }
    }
}

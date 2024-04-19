<?php

namespace App\Models;

use App\Traits\HasMultilingualTitle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasMultilingualTitle;

    protected $table = 'posts';
    protected $guarded = false;

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function documents()
    {
        return $this->belongsToMany(Document::class, 'requirements', 'post_id', 'document_id');
    }
}

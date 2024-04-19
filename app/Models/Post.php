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
}

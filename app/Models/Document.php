<?php

namespace App\Models;

use App\Traits\HasMultilingualTitle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    use HasMultilingualTitle;

    protected $table = 'documents';
    protected $guarded = false;
}

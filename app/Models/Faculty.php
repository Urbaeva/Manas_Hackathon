<?php

namespace App\Models;

use App\Traits\HasMultilingualTitle;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    use HasMultilingualTitle;

    protected $table = 'faculties';
    protected $guarded = false;

}

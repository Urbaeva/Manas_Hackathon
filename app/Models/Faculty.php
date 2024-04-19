<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculties';
    protected $guarded = false;

    public function name(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $lang = app()->getLocale();
                if($lang == 'tr'){
                    return $this->name_tr;
                }
                return $value;
            },
        );
    }
}

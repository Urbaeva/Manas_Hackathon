<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasMultilingualTitle
{
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

    public function description(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $lang = app()->getLocale();
                if($lang == 'tr'){
                    return $this->description_tr;
                }
                return $value;
            },
        );
    }
}

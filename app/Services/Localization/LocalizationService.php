<?php

namespace App\Services\Localization;

use Illuminate\Support\Facades\Facade;
use App\Services\Localization\Localization;

class LocalizationService extends Facade{
    protected static function getFacadeAccessor(){
        return "App\Services\Localization\Localization";
    }
}

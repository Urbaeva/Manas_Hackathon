<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $langPrefix = ltrim($request->route()->getPrefix(), '/');
        if($langPrefix){
            $langPrefix = explode('/', $langPrefix);
            $d = strval(array_search('tr', $langPrefix, true));

            if($d != ''){
                App::setLocale("tr");
            }
            else{
                App::setLocale('ky');
            }

        }
        else{
            App::setLocale('ky');
        }

        return $next($request);
    }
}

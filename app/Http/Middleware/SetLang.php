<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //get the value stored in session
        $lang = Session::get('lang');
        //if user change the lang set locale==lang
        if($lang)
            App::setLocale('$lang');

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class isApiUser
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
        $access_token = $request->access_token;
        if ($request->has('access_token')) {
            if ($request->access_token !== null) {
                $user = user::where('access_token', $access_token)->first();
                if ($user !== null) {
                    return $next($request);
                }else
                 return response()->json("this token not correct");

            }else
            return response()->json("this token is empty");

        }else
        return response()->json("there is not access token ");

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        echo "<br/>Test Middleware <br/>";

        return $next($request);
        
        // $res = $next($request);
        // echo "<br/>Test Middleware <br/>";

        // return $res;
    }

    // this will call after senidng resposne to client/user who will call
    public function terminate($request, $response)
    {
        echo "<br/>ok<br/>";
    }
}

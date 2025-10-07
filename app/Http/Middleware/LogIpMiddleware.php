<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;  // Thêm dòng này

class LogIpMiddleware
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $method= $request->method();
        $path = $request->path();   
        // Ghi log vao channel ' request.log'
        Log::channel("requestlog")->info("Request from IP : $ip, Method : $method, Path: $path");

        return $next($request);
    }
}

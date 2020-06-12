<?php

namespace App\Http\Middleware;

use Closure;

class DeleteMiddleware
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
        dd(now()->format('s'));
        return $next($request);
    }
}

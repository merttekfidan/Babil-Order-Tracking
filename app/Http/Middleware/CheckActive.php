<?php

namespace App\Http\Middleware;

use Closure;

class CheckActive
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
        if (auth()->check()) {
            if (auth()->user()->active==0) {
                $message = 'Your account has been blocked.';
                auth()->logout();
                return redirect()->route('login')->withMessage($message);
            }
        }
        return $next($request);
    }
}

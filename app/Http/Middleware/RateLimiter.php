<?php

namespace App\Http\Middleware;

use App\Libraries\RateLimiterThroattle;
use Closure;
use Illuminate\Http\Request;

class RateLimiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $rateLimiter;

    public function __construct(RateLimiterThroattle $rateLimiter) {
        $this->rateLimiter = $rateLimiter;
    }

    public function handle($request, Closure $next) {
        $ip = $request->ip();
        if (!$this->rateLimiter->check($ip)) {
            return response('Too many requests', 429);
        }

        return $next($request);
    }
}

<?php

namespace SimbaJirira\AdminDashboard\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackPageViewsMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}

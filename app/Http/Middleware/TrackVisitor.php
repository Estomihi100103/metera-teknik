<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cookie;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {

        // Check if visitor has been tracked using a cookie
        if (!Cookie::has('visitor_tracked')) {
            // Create a new visitor record
            \App\Models\Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ]);
            // Set a cookie to mark the visitor as tracked
            Cookie::queue('visitor_tracked', true, 60 * 24); // Cookie expires in 24 hours
        }

        return $next($request);
    }
}

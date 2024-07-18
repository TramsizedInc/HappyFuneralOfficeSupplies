<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        //$role parameter must be the role model's slug property
        if (!$request->user()->role()->slug == $role) {
            toastr()->error("Nincs Jogosultsága ezt megtekinteni!");
            return redirect()->back()->with('error', 'Permission denied!');
        }
        return $next($request);
    }
}

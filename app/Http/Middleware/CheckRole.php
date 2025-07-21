<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()
                ->route('login')
                ->with('error', 'Please login to access this page');
        }

        // Get authenticated user
        $user = Auth::user();

        // Convert single role to array for consistent handling
        $roles = array_map('strtolower', $roles);

        // Check if user has any of the required roles
        if (!$user || !in_array(strtolower($user->role), $roles)) {
            return redirect()
                ->back()
                ->with('error', 'You do not have permission to access this page')
                ->withStatus(403);
        }

        return $next($request);
    }
}

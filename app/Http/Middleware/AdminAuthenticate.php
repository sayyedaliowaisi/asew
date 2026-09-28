<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming admin request.
     */
    public function handle(
        Request $request,
        Closure $next
    ): Response {
        /*
        |--------------------------------------------------------------------------
        | Admin Authentication Check
        |--------------------------------------------------------------------------
        */

        if (
            !Auth::guard('admin')
                ->check()
        ) {
            /*
             * For normal browser requests redirect to admin login.
             */
            if (!$request->expectsJson()) {
                return redirect()
                    ->guest(
                        route('admin.login')
                    );
            }

            /*
             * JSON/API-style request.
             */
            return response()->json([
                'message' =>
                    'Unauthenticated.',
            ], 401);
        }

        return $next($request);
    }
}
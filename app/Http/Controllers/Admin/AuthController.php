<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Show admin login page.
     */
    public function showLogin()
    {
        /*
        |--------------------------------------------------------------------------
        | Already Logged In
        |--------------------------------------------------------------------------
        */

        if (Auth::guard('admin')->check()) {
            return redirect()
                ->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }


    /**
     * Authenticate admin.
     */
    public function login(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Already Logged In
        |--------------------------------------------------------------------------
        */

        if (Auth::guard('admin')->check()) {
            return redirect()
                ->route('admin.dashboard');
        }

        /*
        |--------------------------------------------------------------------------
        | Validate Login Request
        |--------------------------------------------------------------------------
        */

        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'password' => [
                'required',
                'string',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Normalize Email
        |--------------------------------------------------------------------------
        */

        $credentials['email'] =
            Str::lower(
                trim($credentials['email'])
            );

        /*
        |--------------------------------------------------------------------------
        | Login Rate Limiting
        |--------------------------------------------------------------------------
        |
        | Limit is based on email + IP address.
        |
        */

        $throttleKey =
            $this->throttleKey(
                $request,
                $credentials['email']
            );

        if (
            RateLimiter::tooManyAttempts(
                $throttleKey,
                5
            )
        ) {
            $seconds =
                RateLimiter::availableIn(
                    $throttleKey
                );

            throw ValidationException::withMessages([
                'email' =>
                    'Too many login attempts. Please try again in ' .
                    $seconds .
                    ' seconds.',
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Remember Me
        |--------------------------------------------------------------------------
        */

        $remember =
            $request->boolean('remember');

        /*
        |--------------------------------------------------------------------------
        | Authentication
        |--------------------------------------------------------------------------
        */

        if (
            Auth::guard('admin')
                ->attempt(
                    $credentials,
                    $remember
                )
        ) {
            /*
            |--------------------------------------------------------------------------
            | Clear Failed Login Attempts
            |--------------------------------------------------------------------------
            */

            RateLimiter::clear(
                $throttleKey
            );

            /*
            |--------------------------------------------------------------------------
            | Prevent Session Fixation
            |--------------------------------------------------------------------------
            */

            $request->session()
                ->regenerate();

            return redirect()
                ->intended(
                    route('admin.dashboard')
                );
        }

        /*
        |--------------------------------------------------------------------------
        | Failed Login
        |--------------------------------------------------------------------------
        */

        RateLimiter::hit(
            $throttleKey,
            60
        );

        throw ValidationException::withMessages([
            'email' =>
                'Invalid admin email or password.',
        ]);
    }


    /**
     * Logout admin.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')
            ->logout();

        /*
        |--------------------------------------------------------------------------
        | Destroy Current Session
        |--------------------------------------------------------------------------
        */

        $request->session()
            ->invalidate();

        /*
        |--------------------------------------------------------------------------
        | Generate Fresh CSRF Token
        |--------------------------------------------------------------------------
        */

        $request->session()
            ->regenerateToken();

        return redirect()
            ->route('admin.login')
            ->with(
                'success',
                'You have been logged out successfully.'
            );
    }


    /**
     * Generate login throttle key.
     */
    private function throttleKey(
        Request $request,
        string $email
    ): string {
        return Str::transliterate(
            Str::lower($email) .
            '|' .
            $request->ip()
        );
    }
}
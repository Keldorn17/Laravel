<?php

namespace App\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthCheckService
{
    public static function requireAuth(): RedirectResponse|null
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return null;
    }

    public static function requireAdmin()
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return Auth::user()->isAdmin();
    }
}

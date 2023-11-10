<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /** @var string  */
    const ROUTE_AUTH = 'api.auth.auth';

    /** @var string  */
    const ROUTE_LOGOUT = 'api.auth.logout';

    /**
     * Авторизация
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    /**
     * Выхож
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }
}

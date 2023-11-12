<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if (!Auth::attempt()) {
            $validator->errors()->add('mainAuthError', 'Вы не смогли авторизоваться пароль либо имейл не верен');
        }

        if (!empty($validator->errors()->messages())) {
            return redirect(\App\Http\Controllers\PublicController::ROUTE_INDEX)->withErrors($validator, 'auth');
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

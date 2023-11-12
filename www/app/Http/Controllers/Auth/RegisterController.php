<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /** @var string  */
    const ROUTE_REGISTER = 'api.auth.register';

    /** @var string  */
    const ROUTE_CHANGE_ROLE = 'api.auth.changeRole';

    /**
     * Регистрация пользователя
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        if (!empty($validator->errors()->messages())) {
            return redirect(\App\Http\Controllers\PublicController::ROUTE_INDEX)->withErrors($validator, 'reg');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    /**
     * Изменение роли пользователя
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeRole ()
    {
       $user = Auth::user();

       $user->role = $user->isAdmin() ? 'user' : 'admin';
       $user->save();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }
}

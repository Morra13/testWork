<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_INDEX = 'index';

    /** @var string  */
    const ROUTE_REGISTER = 'register';

    /** @var string  */
    const ROUTE_AUTH = 'auth';

    /**
     * Главная страница
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ()
    {
        $obProducts = new Product();

        $arProducts = $obProducts->get();

        foreach ($arProducts as $value) {
            if ($value->data){
                $value->arData = json_decode($value->data, true);
            }
        }

        return view(
            'index',
            [
                'arProducts' => $arProducts,
            ]
        );
    }

    /**
     * Страница регистрации
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function register ()
    {
        return view('register');
    }

    /**
     * Страница авторизации
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function auth ()
    {
        return view('auth');
    }

}

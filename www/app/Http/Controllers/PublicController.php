<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_INDEX = 'index';

    /**
     * Главная страница
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index ( string $status = null)
    {
        $arProducts = $status == 'available'  ? (new Product())->getAvailableProducts() : (new Product())->getAllProducts();

        return view(
            'index',
            [
                'arProducts' => $arProducts,
                'status' => $status,
            ]
        );
    }

}

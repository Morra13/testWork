<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_INDEX = 'index';

    public function index ()
    {
        $obProducts = new Product();

        $arProducts = $obProducts->get();

        return view(
            'index',
            [
                'arProducts' => $arProducts,
            ]
        );
    }
}

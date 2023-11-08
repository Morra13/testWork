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
}

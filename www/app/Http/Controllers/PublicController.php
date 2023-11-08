<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_INDEX = 'index';

    /** @var string  */
    const ROUTE_CHECK = 'check';

    /** @var string  */
    const ROUTE_EDIT = 'edit';


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


    public function check ()
    {
        $obProducts = new Product();

        $arProduct = $obProducts::all()->first();

        return view(
            'layouts.check',
            [
                'arProduct' => $arProduct,
            ]
        );
    }

    public function edit (int $id)
    {
        $obProducts = (new Product())
            ->where('id', $id)
            ->first()
        ;

        $obProducts->data = json_decode($obProducts->data, true);

        foreach ($obProducts->data as $key => $value) {
            $arKeys[] = $key . ",";
        }

        $obProducts->keys =  implode($arKeys);

        return view(
            'layouts.edit',
            [
                'arProduct' => $obProducts,
            ]
        );
    }

}

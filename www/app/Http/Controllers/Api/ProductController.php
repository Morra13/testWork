<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers\Api
 */
class ProductController extends Controller
{
    /** @var string  */
    const ROUTE_CREATE = 'api.product.create';

    /** @var string  */
    const ROUTE_UPDATE = 'api.product.update';

    /** @var string */
    const ROUTE_DELETE = 'api.product.delete';

    /**
     * Создание продукта
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create (Request $request)
    {
        $obProduct = new Product();

        $arrKeys = explode(',' , substr($request->get('inputArrKeys'), 0, -1));

        foreach ($arrKeys as $value) {
            $arrJson[] = [
                $request->get('attributeName_'.$value) => $request->get('attributeValue_'.$value),
            ];
        }

        $json = json_encode($arrJson);
        $obProduct->article = $request->get('article');
        $obProduct->name = $request->get('name');
        $obProduct->status = $request->get('status');
        $obProduct->data = $json;
        $obProduct->save();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    public function update ()
    {
        $obProduct = new Product();
    }

    public function delete ()
    {
        $obProduct = new Product();
    }
}

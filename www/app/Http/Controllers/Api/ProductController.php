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
    const ROUTE_EDIT = 'api.product.edit';

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
        $arrJson = [];
        $obProduct = new Product();

        $arrKeys = explode(',' , substr($request->get('inputArrKeys'), 0, -1));
        foreach ($arrKeys as $value) {
            if ($request->get('attributeName_'.$value) & $request->get('attributeValue_'.$value)) {
                $arrJson[] = [
                    $request->get('attributeName_'.$value) => $request->get('attributeValue_'.$value),
                ];
            }
        }
        $json = $arrJson ? json_encode($arrJson) : null;

        $obProduct->article = $request->get('article');
        $obProduct->name = $request->get('name');
        $obProduct->status = $request->get('status');
        $obProduct->data = $json ?? null;
        $obProduct->save();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    /**
     * Изменение продукта
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit (Request $request)
    {
        $obProduct = (new Product())
            ->where('id', (int) $request->get('id'))
            ->first()
        ;

        $arrKeys = explode(',' , substr($request->get('inputArrKeys'), 0, -1));
        foreach ($arrKeys as $value) {
            if ($request->get('attributeName_'.$value) & $request->get('attributeValue_'.$value)) {
                $arrJson[] = [
                    $request->get('attributeName_'.$value) => $request->get('attributeValue_'.$value),
                ];
            }
        }
        $json = $arrJson ? json_encode($arrJson) : null;

        $obProduct->article = $request->get('article');
        $obProduct->name = $request->get('name');
        $obProduct->status = $request->get('status');
        $obProduct->data = $json ?? null;
        $obProduct->update();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    /**
     * Удаление продукта
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete (int $id)
    {
        (new Product())->where('id', (int) $id)->first()->delete();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);

    }
}

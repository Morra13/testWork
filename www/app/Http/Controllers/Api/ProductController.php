<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * @return RedirectResponse
     */
    public function create (Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'min:10'],
            'article'   => ['required', 'unique:products', 'regex:/^[A-Za-z0-9]+$/'],
        ]);

        if (!empty($validator->errors()->messages())) {
            return redirect(\App\Http\Controllers\PublicController::ROUTE_INDEX)->withErrors($validator, 'create');
        }

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

        return redirect(\App\Http\Controllers\PublicController::ROUTE_INDEX);
    }

    /**
     * Изменение продукта
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function edit (Request $request): RedirectResponse
    {
        $arrJson = [];
        $obProduct = (new Product())
            ->where('id', (int) $request->get('id'))
            ->first()
        ;

        $arrKeys = explode(',' , substr($request->get('editInputArrKeys'), 0, -1));

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
     * @return RedirectResponse
     */
    public function delete (int $id): RedirectResponse
    {
        (new Product())->where('id', (int) $id)->first()->delete();

        return redirect()->route(\App\Http\Controllers\PublicController::ROUTE_INDEX);

    }
}

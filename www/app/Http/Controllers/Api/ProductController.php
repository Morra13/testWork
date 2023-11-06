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

    public function create ()
    {
        $obProduct = new Product();
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /** @var string  */
    const ROUTE_INDEX = 'index';

    public function index ()
    {
        return view('index');
    }
}

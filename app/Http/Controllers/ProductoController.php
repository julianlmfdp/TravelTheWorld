<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = ['Play Station', 'Xbox One', 'Nintendo Swich', 'Game Pass'];
        return view('producto', ['producto' => $producto]);
        
    }

//
}

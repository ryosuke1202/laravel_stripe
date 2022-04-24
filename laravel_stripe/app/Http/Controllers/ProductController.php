<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')
            ->with('products', Product::get());
    }

    public function show(int $id)
    {
        $data = Product::find($id);
        return view('product.show', ['product' => $data]);
    }
}

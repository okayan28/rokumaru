<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateConfirmRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function new()
    {
        return view('product.new');
    }

    public function newConfirm(ProductCreateConfirmRequest $request)
    {
        return view('product.newConfirm', ['product' => $request->all()]);
    }
}

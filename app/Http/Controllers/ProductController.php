<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateConfirmRequest;
use App\Http\Requests\ProductCreateRequest;
use App\Models\Product;
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

    public function newBack(Request $request)
    {
        return view('product.new', ['product' => $request->all()]);
    }

    public function create(ProductCreateRequest $request)
    {
        $product = new Product;
        $form = $request->all();
        unset($form['_token']);
        $product->fill($form);
        $product->save();
        return redirect('/products');
    }
}

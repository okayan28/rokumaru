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
        $request->flash();
        return view('product.newConfirm', ['product' => $request->all()]);
    }

    public function newBack()
    {
        return view('product.new');
    }

    public function create(ProductCreateRequest $request)
    {
        $product = new Product;
        $form = $request->all();
        unset($form['_token']);
        $product->fill($form);
        $product->save();
        $request->session()->flash('flash', '商品[id='.$product->id.']を作成しました');
        return redirect('/products');
    }

    public function index()
    {
        return view('product.index', ['products' => Product::all()]);
    }

    public function show($id)
    {
        return view('product.show', ['product' => Product::find($id)]);
    }

    public function edit($id)
    {
        return view('product.edit', ['product' => Product::find($id)]);
    }
}

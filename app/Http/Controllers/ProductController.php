<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateConfirmRequest;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductEditConfirmRequest;
use App\Http\Requests\ProductUpdateRequest;
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
        $path = $request->file('gazou')->store('public/images');
        $form = $request->all();
        $parsed_uri = explode('/', $path);
        $form['gazou_path'] = '/storage/images/' . end($parsed_uri);
        return view('product.newConfirm', ['product' => $form]);
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
        $request->session()->flash('flash', '商品[id=' . $product->id . ']を作成しました');
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

    public function editConfirm(ProductEditConfirmRequest $request, $id)
    {
        $request->flash();
        $gazou = $request->file('gazou');
        $form = $request->all();
        if ($gazou !== null) {
            $path = $request->file('gazou')->store('public/images');
            $parsed_uri = explode('/', $path);
            $form['gazou_path'] = '/storage/images/' . end($parsed_uri);
        }
        return view('product.editConfirm', ['product' => $form]);
    }

    public function update(ProductUpdateRequest $request)
    {
        $form = $request->all();
        $product = Product::find($form['id']);
        unset($form['_token']);
        $product->fill($form);
        $product->save();
        $request->session()->flash('flash', '商品[id=' . $product->id . ']を更新しました');
        return redirect('/products');
    }

    public function deleteConfirm($id)
    {
        return view('product.deleteConfirm', ['product' => Product::find($id)]);
    }

    public function delete(Request $request, $id)
    {
        Product::find($id)->delete();
        $request->session()->flash('flash', '商品[id=' . $id . ']を削除しました');
        return redirect('/products');
    }
}

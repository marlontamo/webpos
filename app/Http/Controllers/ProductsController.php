<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    public function listing()
    {
        $products = Product::all();

        return view('backend/products.list', compact('products'));
    }

    public function create()
    {$products = Product::all();
        return view('backend/products.create', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('backend/products.edit', compact('product'));
    }

    public function view($id)
    {
        $product = Product::find($id);
        
        return view('backend/products.view', compact('product'));
    }

    public function store(Request $request)
    {  
        $requestData = $request->all();

        $this->validate(request(),[
            'product_code' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required'
        ]);

        Product::create($requestData);

        return redirect('/backend/products');
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
       
        $requestData = $request->all();

        $this->validate(request(),[
            'product_code' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required'
        ]);

        $product->update($requestData);

        return redirect('/backend/products');
    }

    public function delete($id)
    {
        $product = Product::find($id);

        $product->destroy($id);
       
        return redirect('/backend/products');
    }
  
}

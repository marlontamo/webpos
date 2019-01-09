<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pos;
use App\Product;

class PosController extends Controller
{
    public function show()
    {
    	$products = Product::all();
        return view('backend/pos', compact('products'));
    }
    
    public function store(Request $request)
    {  
        $requestData = $request->all();
        
        // $this->validate(request(),[
        //     'product_code' => 'required',
        //     'product_name' => 'required',
        //     'product_description' => 'required',
        //     'product_price' => 'required'
        // ]);

        Pos::create($requestData);

        return redirect('/backend/pos');
    }
}
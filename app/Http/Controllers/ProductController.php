<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "price" => "required|numeric|max:5000",
            "discount" => "required|numeric|max:500",
        ]);

        $create = [
            "name" => $request->name,
            "price" => $request->price,
            "discount" => $request->discount,
        ];
        
        $storeProd = Product::create($create);

        if($storeProd){
            return back()->with('success', 'Product created successfully');
        }
        return back()->with('error', 'Something went wrong');
    }
    
}

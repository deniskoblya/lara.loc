<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($cat, $product_id){
        $item = Product::where('id', $product_id)->first();

        return view('product.product', [
            'item' => $item
        ]);
    }

    public function getCategory($cat){

    }
}

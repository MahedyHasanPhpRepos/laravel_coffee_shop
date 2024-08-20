<?php

namespace App\Http\Controllers;

use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('type', $product->type)
            ->where('id', '!=', $product->id)->limit(4)->orderBy('id', 'desc')->get();


        // dd($relatedProducts) ; 

        return view('products.single_product', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }
}

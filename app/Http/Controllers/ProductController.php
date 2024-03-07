<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductFilterRequest;

class ProductController extends Controller
{
    
    public function index(ProductFilterRequest $request)
    {
        $vendor = $request->query('vendor');
        $category = $request->query('category');
        $price = $request->query('price');
        if ($vendor) {
            $products = Product::where('productVendor', $vendor)->get();
        } else if ($category) {
            $products = Product::where('productLine', $category)->get();
        } else if ($price) {
            $products = Product::where('buyPrice', $price)->get();
        } else {
            $products = Product::all();
        }
        return view('product', [
            'products' => $products
        ]);
    }
}

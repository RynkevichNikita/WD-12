<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index(Request $requset)
    {
        $vendor = $requset->query('vendor');
        $category = $requset->query('category');
        $price = $requset->query('price');
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

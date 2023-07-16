<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    public function ProductTitle(Request $request) {
        return Product::select('title', 'price', 'discount_price')->get();
    }
    function UniquePrice(Request $request) {
        return Product::select('price')->distinct()->get();
    }
}

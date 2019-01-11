<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'price')->paginate(5);
        return view('shop.index', ['products' => $products]);
    }
    public function showmenproducts() {
        return view ('shop.shop-grid');
    }
}

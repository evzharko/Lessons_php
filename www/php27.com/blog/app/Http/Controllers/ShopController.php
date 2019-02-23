<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'slug', 'price')->paginate(5);
        $products_womens = Product::all()->where('category_id', '=', 2);
//        dd($products_womens);
        return view('shop.index', [
            'products' => $products,
            'products_womens' => $products_womens
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function shorts()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'slug', 'price')->paginate(5);
        return view('shop.shorts', ['products' => $products]);
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $product_slug = Product::where([
            'slug' => $slug,
        ])->firstOrFail();
//        dd($product_slug);
        return view('shop.product', [
            'product_slug' => $product_slug
        ]);
    }
}

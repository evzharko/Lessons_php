<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'price')->paginate(10);
        return view('admin.products.index', ['products' => $products]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
//dd($product);
        return view('admin.products.edit', ['product' => $product]);
    }

    public function add()
    {
        return view('admin.products.create');
    }

    public function PostCreate(Request $request)
    {
//        dd($request);
        $ProductSlug = $request->post('ProductSlug');
        $ProductName = $request->post('ProductName');
        $ProductDescription = $request->post('ProductDescription');
        $ProductBrand = $request->post('ProductBrand');
        $ProductCategory = $request->post('ProductCategory');
        $ProductPrice = $request->post('ProductPrice');
        $ProductImg = $request->post('ProductImg');

        $data = ['slug' => $ProductSlug, 'name' => $ProductName, 'description' => $ProductDescription, 'brand' => $ProductBrand, 'created_data' => NOW(), 'category_id' => $ProductCategory, 'price' => $ProductPrice, 'img' => $ProductImg];

        DB::table('products')->insert($data);
        return view('admin.products.create');
    }

    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->slug = $request->get('ProductSlug');
        $product->name = $request->get('ProductName');
        $product->description = $request->get('ProductDescription');
        $product->brand = $request->get('ProductBrand');
        $product->category_id = $request->get('ProductCategory');
        $product->price = $request->get('ProductPrice');
        $product->img = $request->get('ProductImg');
//        dd($product->save());
        $product->save();
        return redirect(route('products.edit', ['product' => $product]));
    }

    public function destory()
    {
        //
    }

}

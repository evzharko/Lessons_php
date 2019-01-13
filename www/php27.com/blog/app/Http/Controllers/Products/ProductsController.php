<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'price')->paginate(5);
        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
//      $user = User::find($id);
//
//        return view('user.edit', ['user' => $user]);
    }

    public function add()
    {
        return view('products.create');
    }

    public function PostCreate(Request $request)
    {
        $ProductSlug = $request->post('ProductSlug');
        $ProductName = $request->post('ProductName');
        $ProductDescription = $request->post('ProductDescription');
        $ProductBrand = $request->post('ProductBrand');
        $ProductCategory = $request->post('ProductCategory');
        $ProductPrice = $request->post('ProductPrice');
        $ProductImg = $request->post('ProductImg');

        $data = ['slug' => $ProductSlug, 'name' => $ProductName, 'description' => $ProductDescription, 'brand' => $ProductBrand, 'created_data' => NOW(), 'category_id' => $ProductCategory, 'price' => $ProductPrice, 'img' => $ProductImg];

        DB::table('products')->insert($data);
        return view('products.create');
    }

    public function update(Request $request, $id)
    {

//        $user = User::find($id);
//        $user->name = $request->get('name');
//        $user->email = $request->get('email');
//        $user->save();
//        return redirect(route('user.edit', ['user' => $id]));
    }

    public function destory()
    {
        //
    }

}

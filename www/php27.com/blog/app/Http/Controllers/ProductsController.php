<?php

namespace App\Http\Controllers;

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
        $ProductName = $request->post('ProductName');
        $ProductDescription = $request->post('ProductDescription');
        $ProductBrand = $request->post('ProductBrand');
        $ProductPrice = $request->post('ProductPrice');
        $ProductImg = $request->post('ProductImg');

        $data = ['name' => $ProductName, 'description' => $ProductDescription, 'brand' => $ProductBrand, 'created_data' => NOW(), 'price' => $ProductPrice, 'img' => $ProductImg];

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

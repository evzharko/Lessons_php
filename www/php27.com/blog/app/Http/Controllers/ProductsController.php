<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->select('id', 'name', 'description', 'img', 'price')->paginate(2);
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

    public function create(Request $request)
    {
//        dd($request);
        $this->validate($request, [
            'name' => 'require'
        ]);
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

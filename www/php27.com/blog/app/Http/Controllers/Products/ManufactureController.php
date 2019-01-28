<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ManufactureController extends Controller
{
    public function index()
    {
        /** @var Manufacturer $manufactures */
        $manufactures = Manufacturer::query()
            ->orderBy('name')
            ->paginate(5);

        return view('admin.manufacture.index', ['manufactures' => $manufactures]);
    }

    public function add()
    {
        return view('admin.manufacture.create');
    }

    public function PostCreate(Request $request)
    {
        $ManufactureName = new Manufacturer();
        $ManufactureName->name = $request->post('ManufactureName');
        $ManufactureName->save();

        return redirect(route('manufacturers'));
    }


}

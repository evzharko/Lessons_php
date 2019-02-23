<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Manufacturer;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Http\File;

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function PostCreate(Request $request)
    {
        $Path_Save = 'upload/images';
        $NewNameImg = $request->post('ManufactureName');
        $PathName = $request->file('ManufactureImg')->move($Path_Save, $NewNameImg);
        $img_url = $Path_Save;
        dd($img_url);

        $ManufactureName = new Manufacturer();
        $ManufactureName->name = $request->post('ManufactureName');
        $ManufactureName->save();

        return redirect(route('manufacturers'));
    }


}

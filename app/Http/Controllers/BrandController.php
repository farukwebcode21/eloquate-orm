<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller {

    public function inserData(Request $request) {
        return Brand::create($request->input());
    }

    public function UpdateOrInsert(Request $request) {
        return Brand::updateOrCreate(
            ['brandName' => $request->brandName],
            $request->input()
        );
    }

    public function DeleteBrand(Request $request) {
        return Brand::where('id', '=', $request->id)->Delete();

    }

    public function getBrandName(Request $request) {
        return Brand::get();
    }
    public function firstData(Request $request) {
        return Brand::first();
    }
    public function findData(Request $request) {
        return Brand::find(3);
    }
}

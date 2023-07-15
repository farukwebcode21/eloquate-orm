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
}

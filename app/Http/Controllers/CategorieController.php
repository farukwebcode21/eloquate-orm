<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller {
    public function UpdateCategoryData(Request $request) {
        return Categorie::where('id', $request->id)->update($request->input());
    }
}

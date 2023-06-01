<?php

namespace App\Http\Controllers;


use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all_category(){
        $category = category::all();
        $product = product::all();
        return view('market', ['category'=>$category, 'product'=>$product]);
    }
}

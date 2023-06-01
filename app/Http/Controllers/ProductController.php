<?php

namespace App\Http\Controllers;
use App\Models\login;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($id){
      $product = Product::where('category_id', $id)->get();
      $category = category::all();
        return view('market', ['category'=>$category, 'product'=>$product]);
    }
}

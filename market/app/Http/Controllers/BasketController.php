<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\category;
use App\Models\login;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function market(Request $r){
        $category = category::all();
        $product = product::all();
        $caunt = $r->caunt;
        $price = $r->product_price;
        $summa = $caunt * $price;
        Basket::create([
            'user_id'=>$r->user_id,
            'product_id'=>$r->product_id,
            'product_name'=>$r->product_name,
            'product_price'=>$r->product_price,
            'caunt'=>$r->caunt,
            'status'=>$r->status,
            'summa'=>$summa
        ]);
        
        return redirect()->route('market_p');
    }

    public function basket_page(){
        $id = Auth::user()->id;
        $basket = Basket::where('user_id', $id)->where('status', 1)->get();
        $summa = 0;
        foreach ($basket as $val) {
            $summa += $val->summa;
        };
        $i = 1;
        return view('basket', ['baskets'=>$basket, 'i'=>$i, 'summa'=>$summa]);
    }


    public function money(){
        $id = Auth::user()->id;
        $basket = Basket::where('user_id', $id)->where('status', 1)->get();
        $summa = 0;
        foreach ($basket as $val) {
            $summa += $val->summa;
        };
        return view('money', ['summa'=>$summa]);
    }

    public function tolendi(){
        $id = Auth::user()->id;
        Basket::where('user_id', $id)->update(['status'=>0]);
        return redirect()->route('basket_p');
    }

}



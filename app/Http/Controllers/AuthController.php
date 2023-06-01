<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_p(){
        return view('login');
    }
    public function registr_p(){
        return view('registr');
    }
    public function registr(Request $request){
        $user = [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        $user = User::create($user);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();
            return redirect()->route('market_p');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }

}

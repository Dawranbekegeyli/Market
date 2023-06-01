<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('welcome');
})->name('home')->middleware();

Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'login_p')->name('login_p');
    Route::get('/registr', 'registr_p')->name('registr_p');
    Route::post('/registr', 'registr')->name('registr');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/market', 'all_category')->name('market_p');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/market/{id}', 'product');
});

Route::controller(BasketController::class)->group(function(){
    Route::post('/market', 'market')->name('market');
    Route::get('/basket', 'basket_page')->name('basket_p');
    Route::get('/money', 'money')->name('money');
    Route::post('/baskets', 'tolendi')->name('tolendi');
});




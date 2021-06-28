<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TiendaController;

Route::get('/',function(){
    return view('welcome');
});
Route::resource('productos', ProductController::class);

Route::get('admin-productos',[TiendaController::class,'index'])->name('admin.index');

Route::post('/addcart',[CartController::class,'add'])->name('cart.add');

Route::get('/cart-checkout',[CartController::class,'cart'])->name('cart.checkout');

Route::post('/cart-clear',[CartController::class,'clear'])->name('cart.clear');

Route::get('remove/{id}', [CartController::class,'removeProduct']);

Route::get('/cart-sell',[CartController::class,'sell'])->name('cart.sell');

Route::get('/notifications',[TiendaController::class,'notifications']);
//Route::post('/cart-removeProduct',[CartController::class,'removeProduct'])->name('cart.removeProduct');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

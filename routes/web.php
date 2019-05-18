<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user/main');
})->name('main');
Route::get('/cart', function () {
  return view('user/cart');
})->name('cart');
Route::get('/product', function () {
  return view('user/product');
})->name('product');
Route::get('/category', function () {
  return view('user/category');
})->name('category');
Route::get('/checkout', function () {
  return view('user/checkout');
})->name('checkout');
Route::get('/contact', function () {
  return view('user/contact');
})->name('contact');

Route::get('/admin', function () {
  return view('admin/dashboard');
})->name('admin');

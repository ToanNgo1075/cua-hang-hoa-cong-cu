<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function(){
    return view('User.about');
});
Route::get('/contact',function(){
    return view('User.contact');
});
Route::get('/checkout',function(){
    return view('User.checkout');
});
Route::get('/faqs',function(){
    return view('User.faqs');
});
Route::get('/index',function(){
    return view('User.index');
});
Route::get('/productdetail',function(){
    return view('User.productdetail');
});
Route::get('/products',function(){
    return view('User.products');
});
Route::get('/shoppingcart',function(){
    return view('User.shoppingcart');
});
Route::get('/layout',function(){
    return view('layout.layout');
});
Route::get('/Admin',function(){
    return view('Admin.Admin');
});

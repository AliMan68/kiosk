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
    return view('site.latest-orders');
});

//Manage Products

Route::get('/manage-products', function () {
    return view('site.manage-product');
});

Route::get('/manage-foods', function () {
    return view('site.manage-products.food');
});

Route::get('/manage-dessert', function () {
    return view('site.manage-products.dessert');
});

Route::get('/dessert-edit', function () {
    return view('site.manage-products.dessert-edit');
});

Route::get('/food-edit', function () {
    return view('site.manage-products.food-edit');
});

Route::get('/categories', function () {
    return view('site.manage-products.categories');
});

Route::get('/category-edit', function () {
  return view('site.manage-products.category-edit');
});

//Reports

Route::get('/today-report',function (){
  return view('site.report.today');
});

Route::get('/all-report',function (){
  return view('site.report.all');
});
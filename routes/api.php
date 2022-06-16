<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\api\apidanhmuccontroller;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('cata',\App\Http\Controllers\api\apicatacontroller::class);
Route::resource('product',\App\Http\Controllers\api\apiproductcontroller::class);
Route::resource('brand',\App\Http\Controllers\api\apibrandcontroller::class);
Route::resource('position',\App\Http\Controllers\api\apipositioncontroller::class);
Route::resource('home',\App\Http\Controllers\api\apihomecontroller::class);
Route::resource('bill',\App\Http\Controllers\api\apicheckoutcontroller::class);
Route::resource('users',\App\Http\Controllers\api\apiusercontroller::class);
Route::resource('slide',\App\Http\Controllers\api\apislidecontroller::class);
Route::resource('slidehome',\App\Http\Controllers\api\apislidehome::class);
Route::resource('tags',\App\Http\Controllers\api\apitagscontroller::class);
Route::resource('order',\App\Http\Controllers\api\apiordercontroller::class);
Route::resource('historycheckout',\App\Http\Controllers\api\apihistorycheckoutcontroller::class);
Route::resource('choxacnhan',\App\Http\Controllers\api\apichoxacnhancontroller::class);

Route::post('/slide','\App\Http\Controllers\api\apislidecontroller@store');

Route::get('orderdetail/{id}', '\App\Http\Controllers\api\apidetailordercontroller@index');
Route::get('danhmuc/{id}', '\App\Http\Controllers\api\apidanhmuccontroller@index');
Route::get('detailproduct/{id}', '\App\Http\Controllers\api\apidetailproductcontroller@index');


Route::get('/glammy/detaiproduct/addtocart/{id}','\App\Http\Controllers\home\cartcontroller@addToCart')->name('addToCart');

Route::get('/glammy/login',[\App\Http\Controllers\home\homecontroller::class,'showlogin']);
Route::post('/glammy-login',[\App\Http\Controllers\home\homecontroller::class,'loginhome']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

//Trang quản trị
Route::post('/admin/product',[\App\Http\Controllers\admin\productcontroller::class,'index']);
Route::get('/admin/login',[\App\Http\Controllers\admin\logincontroller::class,'showlogin']);
Route::get('/admin/product',[\App\Http\Controllers\admin\logincontroller::class,'showproduct']);
Route::get('/admin/slide',[\App\Http\Controllers\admin\logincontroller::class,'showslide']);
Route::post('/admin/store',[\App\Http\Controllers\admin\logincontroller::class,'store']);
Route::get('/admin/users',[\App\Http\Controllers\admin\logincontroller::class,'showusers']);
Route::post('admin/slide',[\App\Http\Controllers\admin\logincontroller::class,'addslide']);
Route::post('admin/product',[\App\Http\Controllers\admin\logincontroller::class,'addproduct']);
Route::get('/upload', function () {
    return view('upload');
});
//Route::get('/print-order/{checkout_code}',[\App\Http\Controllers\admin\logincontroller::class,'printorder']);
Route::get('/admin/order',[\App\Http\Controllers\admin\logincontroller::class,'showorder']);
Route::get('/admin/detailorder/{bill_orderid}',[\App\Http\Controllers\admin\logincontroller::class,'showdetailorder']);


Route::get('/admin/pdforder', [\App\Http\Controllers\admin\logincontroller::class, 'showpdforder']);
Route::get('/admin/pdfll', [\App\Http\Controllers\admin\logincontroller::class, 'print_order_convert']);




Route::get('/admin/brand',[\App\Http\Controllers\admin\logincontroller::class,'showbrand']);
Route::get('/admin/',[\App\Http\Controllers\admin\logincontroller::class,'showindex']);
Route::post('/admin-login',[\App\Http\Controllers\admin\logincontroller::class,'loginadmin']);

Route::post('/filter-by-date',[\App\Http\Controllers\admin\logincontroller::class,'filter_by_date']);
Route::get('/admin/logout',[\App\Http\Controllers\admin\logincontroller::class,'logout']);
Route::get('/glammy/logout',[\App\Http\Controllers\home\homecontroller::class,'logout']);
Route::get('/glammy/thanhtoanthanhcong',[\App\Http\Controllers\home\homecontroller::class,'showthanhtoanthanhcong']);

//Trang Home
Route::get('/glammy/home',[\App\Http\Controllers\home\homecontroller::class,'index']);
Route::get('/glammy',[\App\Http\Controllers\home\homecontroller::class,'index']);
Route::get('/glammy/', function () {
    return view('glammy.home', [
        'title'=>'Trang quản trị',
        'activehome'=>'active',
        'activeproduct'=>'',
        'activebrand'=>'',
        'activeuser'=>'',
        'activebill'=>'',
        'activebilldetail'=>''
    ]);
});
//
Route::get('/glammy/detaiproduct/{id}',[\App\Http\Controllers\home\homecontroller::class,'showdeetailproduct']);
Route::get('/glammy/brand/{id}',[\App\Http\Controllers\home\homecontroller::class,'brandpro']);

Route::get('/glammy/cart',[\App\Http\Controllers\home\homecontroller::class,'showcart']);

Route::get('/glammy/checkout/',[\App\Http\Controllers\home\homecontroller::class,'showcheckout']);
Route::post('/save-bill',[\App\Http\Controllers\api\apicheckoutcontroller::class,'store']);
Route::get('/checkout', [\App\Http\Controllers\api\apicheckoutcontroller::class,'getCheckOut']);
Route::post('/checkout', [\App\Http\Controllers\api\apicheckoutcontroller::class,'postCheckOut']);

Route::post('/cart', [\App\Http\Controllers\home\homecontroller::class,'cart']);

//Đăng kí glammy
//Route::post('/glammy-login',[\App\Http\Controllers\home\homecontroller::class,'loginhome']);
Route::get('/glammy/login',[\App\Http\Controllers\home\homecontroller::class,'showlogin']);
Route::get('/glammy/signin',[\App\Http\Controllers\home\homecontroller::class,'showsignin']);
Route::post('/glammy-login',[\App\Http\Controllers\home\homecontroller::class,'loginhome']);
Route::get('/glammy/historycheckout',[\App\Http\Controllers\home\homecontroller::class,'showhistorycheckout']);
Route::get('historycheckout','\App\Http\Controllers\home\homecontroller@historycheckout');

Route::post('dahuy/{id}','\App\Http\Controllers\home\homecontroller@updatedahuy');
Route::post('xacnhannhanhang/{id}','\App\Http\Controllers\home\homecontroller@updatexacnhannhanhang');
Route::post('hoantra/{id}','\App\Http\Controllers\home\homecontroller@updatehoantra');









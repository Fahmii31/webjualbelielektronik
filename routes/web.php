<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\home2Controller;
use App\Http\Controllers\list2Controller;



// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});
Route::prefix('admin')->group(function () {
Route::get('/dashboard', function () {
        return 'Admin Dashboard';
});

Route::get('/users', function () {
        return 'Admin Users';
});
});
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get( '/fahmi',function() {
    return view('fahmi');
});

Route::get( '/home',function() {
    return view('pages/home');
});

Route::get('/produk', [ListProductController::class, 'index'
]);

Route::get('/home', [home2Controller::class, 'home'])->name('home');

Route::get('/list_product', [list2Controller::class, 'list']);
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\IndexController::class,'index']);

Route::get('/portafolio',[App\Http\Controllers\PortafolioController::class,'index']);

Route::get('/contacto', function () {
    return view('contact');
});

Route::post('/contacto',[App\Http\Controllers\HomeController::class,'contacto']);
Route::get('/sobre',[\App\Http\Controllers\AboutController::class,'prueba']);


Route::get('/admin/home', [App\Http\Controllers\Admin\AdminController::class,'index'])->middleware('auth');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class,'index'])->middleware('auth');


Route::get('/admin/show',[App\Http\Controllers\Admin\AdminController::class,'show'])->middleware('auth');
Route::get('/admin/banner',[App\Http\Controllers\Admin\AdminController::class,'banner'])->middleware('auth');
Route::get('/admin/portafolio',[App\Http\Controllers\Admin\AdminController::class,'portafolio'])->middleware('auth');
Route::get('/admin/login',[App\Http\Controllers\Admin\AdminController::class,'login']);
Route::post('/admin/login',[App\Http\Controllers\Admin\AdminController::class,'access']);


Route::post('/about/update',[App\Http\Controllers\AboutController::class,'store']);
Route::post('/banner/update',[App\Http\Controllers\AboutController::class,'bannercreate']);
Route::post('/portafolio/update',[App\Http\Controllers\AboutController::class,'portafolio']);
Route::post('/portafolio/delete', [App\Http\Controllers\PortafolioController::class, 'portafoliodelete']);

Route::post('/banner/delete', [App\Http\Controllers\AboutController::class, 'bannerdelete']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

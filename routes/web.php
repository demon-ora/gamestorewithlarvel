<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Regestation;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
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

Route::get('/',[Login::class,'index']);
Route::get('/regestation',[Regestation::class,'index']);
Route::post('/regestation',[Regestation::class,'store']);
Route::post('/',[Login::class,'login']);
Route::get('/dashboard',[Dashboard::class,'index'])->middleware('islogin');
Route::get('/dashboarduser',[Dashboard::class,'index1'])->middleware('islogin');
Route::get('/dashboard/logout',[Dashboard::class,'logout']);
Route::get('/dashboarduser/delete/{id}',[Dashboard::class,'destory'])->middleware('islogin');
Route::get('/dashboarduser/edit/{id}',[Dashboard::class,'edit'])->middleware('islogin');
Route::post('/dashboarduser/update/{id}',[Dashboard::class,'update'])->middleware('islogin');
Route::get('/dashboardgame',[Dashboard::class,'index2'])->middleware('islogin');
Route::post('/dashboardgame',[Dashboard::class,'store'])->middleware('islogin');
Route::get('/dashboardgame/delete/{id}',[Dashboard::class,'destorygame'])->middleware('islogin');
Route::get('/dashboardgame/edit/{id}',[Dashboard::class,'editgame'])->middleware('islogin');
Route::post('/dashboardgame/update/{id}',[Dashboard::class,'updategame'])->middleware('islogin');
Route::get('/home',[Home::class,'index'])->middleware('islogin');
Route::get('/modedgame',[Home::class,'index1'])->middleware('islogin');
Route::get('/normalgame',[Home::class,'index2'])->middleware('islogin');
Route::get('/home/select/{id}',[Home::class,'select'])->middleware('islogin');
Route::get('/home/logout',[Home::class,'logout']);
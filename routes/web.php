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
Route::get('/dashboarduser',[Dashboard::class,'index1']);
Route::get('/dashboarduser/delete/{id}',[Dashboard::class,'destory']);
Route::get('/dashboarduser/edit/{id}',[Dashboard::class,'edit']);
Route::post('/dashboarduser/update/{id}',[Dashboard::class,'update']);
Route::get('/dashboardgame',[Dashboard::class,'index2']);
Route::post('/dashboardgame',[Dashboard::class,'store']);
Route::get('/dashboardgame/delete/{id}',[Dashboard::class,'destorygame']);
Route::get('/dashboardgame/edit/{id}',[Dashboard::class,'editgame']);
Route::post('/dashboardgame/update/{id}',[Dashboard::class,'updategame']);
Route::get('/home',[Home::class,'index']);
Route::get('/modedgame',[Home::class,'index1']);
Route::get('/normalgame',[Home::class,'index2']);
Route::get('/home/select/{id}',[Home::class,'select']);
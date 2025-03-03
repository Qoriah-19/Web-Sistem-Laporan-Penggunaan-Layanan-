<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
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

Route::get('/',[SesiController::class,'index'])->name('login');
Route::post('/',[SesiController::class,'login']); 


Route::get('/home',function(){
    return redirect ('/admin');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/pengguna_tim',[AdminController::class,'pengguna_tim'])->middleware('userAkses:pengguna_tim');
    Route::get('/pengguna_personal',[AdminController::class,'pengguna_personal'])->middleware('userAkses:pengguna_personal');
    Route::get('/admin',[AdminController::class,'admin']) ->middleware('userAkses:admin');
    Route::get('/logout', [SesiController::class, 'logout']);
});


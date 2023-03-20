<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BenhnhanController;
use App\Http\Controllers\PhieuController;
use App\Models\Benhnhan;

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
    return view('welcome');
});
Route::get('/manager/BN', [BenhnhanController::class, 'index']);
Route::get('/manager/BN/add',[BenhnhanController::class,'create']);
Route::post('/manager/BN/add',[BenhnhanController::class,'store']);

Route::get('/manager/BN/edit/{id}',[BenhnhanController::class,'edit']);
Route::post('/manager/BN/edit/{id}',[BenhnhanController::class,'update']);

Route::get('/manager/BN/delete/{id}', [BenhnhanController::class, 'destroy']);

Route::get('/manager/BN/{id}/Phieu', [PhieuController::class, 'index']);
Route::get('/manager/BN/{id}/Phieu/add',[PhieuController::class,'create']);
Route::post('/manager/BN/{id}/Phieu/add',[PhieuController::class,'store']);

Route::get('/manager/BN/{id}/Phieu/edit/{id2}',[PhieuController::class,'edit']);
Route::post('/manager/BN/{id}/Phieu/edit/{id2}',[PhieuController::class,'update']);

Route::get('/manager/BN/{id}/Phieu/delete/{id2}', [PhieuController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/supir', [SupirController::class, 'index']);
Route::get('/supir/form/', [SupirController::class, 'create']);
Route::post('/supir/store/', [SupirController::class, 'store']);
Route::get('/supir/edit/{id}', [SupirController::class, 'edit']);
Route::put('/supir/{id}', [SupirController::class, 'update']);
Route::delete('/supir/{id}', [SupirController::class, 'destroy']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/form/', [BarangController::class, 'create']);
Route::post('/barang/store/', [BarangController::class, 'store']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'destroy']);

Route::get('/Customer', [CustomerController::class, 'index']);
Route::get('/Customer/form/', [CustomerController::class, 'create']);
Route::post('/Customer/store/', [CustomerController::class, 'store']);
Route::get('/Customer/edit/{id}', [CustomerController::class, 'edit']);
Route::put('/Customer/{id}', [CustomerController::class, 'update']);
Route::delete('/Customer/{id}', [CustomerController::class, 'destroy']);


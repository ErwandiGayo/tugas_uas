<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupirController;

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
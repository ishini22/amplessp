<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\roleController;
use App\Http\Controllers\WishListController;
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
    return view('welcome');
});
Route::get('/redirect',[roleController::class,"index"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[roleController::class,"index"]);

Route::get('adduser',[roleController::class,"adduser"]);

Route::post('saveuser',[roleController::class,"saveuser"]);

Route::post('submituser',[roleController::class,"submituser"]);

Route::get('edituser/{id}',[roleController::class,"edituser"]);

Route::get('deleteuser/{id}',[roleController::class,"deleteuser"]);

Route::post('updateuser',[roleController::class,"updateuser"]);





Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist');

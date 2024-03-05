<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Models\crud;

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
    return view('login');
});

Route::post('crud/store',[userController::class,'store'])->name('crud.store');

Route::get('/show', [userController::class, 'index'])->name('show');
Route::get('/edit/{id}', [userController::class ,'edit'])->name('user_edit');
// updates a post
Route::GET('/update/{id}', userController::class .'@update')->name('user_update');
Route::post('/delete/{id}', userController::class .'@destroy')->name('delete');

// Route::post('product/store',[ProductController::class,'store'])->name('product.store');


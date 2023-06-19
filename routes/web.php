<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::middleware(['guest'])->group(function(){
    Route::get('signup', [UserController::class , 'signup'])->name('signup');
    Route::post('signup', [UserController::class , 'create']);
    Route::get('login', [UserController::class , 'login'])->name('login');
    Route::post('login', [UserController::class , 'auth']);

});

Route::middleware(['auth'])->group(function(){
    Route::get('home', [ProductsController::class , 'index'])->name('index');
    Route::get('products', [ProductsController::class , 'productsview'])->name('products');
    Route::post('changeStatus', [ProductsController::class , 'changeStatus'])->name('changeStatus');
    Route::post('deleteProduct', [ProductsController::class , 'deleteProduct'])->name('deleteProduct');
    Route::post('updateProductView', [ProductsController::class , 'updateProductView'])->name('updateProductView');
    Route::post('updateProduct', [ProductsController::class , 'updateProduct'])->name('updateProduct');
    Route::get('logout', [UserController::class , 'logout'])->name('logout');
    Route::get('profile', [UserController::class , 'profile'])->name('profile');
    Route::post('profileUpdate/{id}', [UserController::class , 'profileUpdate']);
    Route::post('productsAdd', [ProductsController::class , 'productsAdd'])->name('productsAdd');

    Route::get('products2' , [ProductsController::class , 'product2'])->name('product2');
});
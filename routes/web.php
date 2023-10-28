<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController; // Add this import

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

use App\Http\Controllers\ProductController; // Change the controller import

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'submitForm']);
Route::get('/success', function () { return view('success'); });
Route::get('/dashboard', [ProductController::class, 'index']);
Route::get('/shopping-cart', [ProductController::class, 'shoppingCart'])->name('shopping.cart');
Route::get('/product/{id}', [ProductController::class, 'addProductToCart'])->name('addproduct.to.cart');
Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->name('update.shopping.cart');
Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;

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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/master', function () {
    return view('templates.master');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/produk', [ProdukController::class, 'index'])
->name('produk');

Route::get('/produkdelete/delete/{id}', [ProdukController::class, 'destroy'])
->name('produkdelete');

Route::get('/tambah', [ProdukController::class, 'create'])
->name('tambah');

Route::get('/categories', [CategoriesController::class, 'index'])
->name('categories');

Route::get('/categoriesdelete/delete/{id}', [CategoriesController::class, 'destroy'])
->name('categoriesdelete');

Route::get('/customers', [CustomersController::class, 'index'])
->name('customers');

Route::get('/customersdelete/delete/{id}', [CustomersController::class, 'destroy'])
->name('customersdelete');
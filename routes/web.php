<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products');
Route::post('store-product', 'App\Http\Controllers\ProductController@storeProduct')->name('store-product');
Route::get('reports', 'App\Http\Controllers\reportController@index')->name('reports');
Route::get('export-product', 'App\Http\Controllers\reportController@ExportProduct')->name('export-product');
Route::get('export-product-month-wise', 'App\Http\Controllers\reportController@ExportProductMonthWise')->name('export-product-month-wise');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

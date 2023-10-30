<?php

use App\Models\Store;
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

Route::get('/', function () {

    $stores = Store::all();
    return view('index', compact('stores'));
});

Route::get('/index', 'App\Http\Controllers\StoreController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\StoreController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\StoreController@store')->name('store');
Route::get('/show/{id}', 'App\Http\Controllers\StoreController@show')->name('show');

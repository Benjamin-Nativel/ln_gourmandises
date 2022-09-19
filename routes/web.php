<?php

use App\Http\Controllers\ProduitsController;
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
    return view('index');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/details', function () {
    return view('details');
});

Route::get('/',[ProduitsController::class, 'getProduits']);

Route::get('/filter',[ProduitsController::class,'getProduits'])->name('searchfilter');
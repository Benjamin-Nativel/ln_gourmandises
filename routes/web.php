<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
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




Route::get('/test', function () {
    return view('test');
});


// Route::post('/home',[ProduitsController::class, 'getProduits'])->name('home');

Route::get('/home',[ProduitsController::class, 'getProduits']);
Route::get('/produit/{id}', [ProduitsController::class, 'getOneDetails'])->whereNumber('id')->name('getDetails');
Route::get('/produits/filter',[ProduitsController::class,'getProduits'])->name('searchfilter');
Route::post('/commentaires/{id}', [ProduitsController::class, 'addComm']);
Route::get('/mentions', function () {
    return view('mentions');
});
Route::get('/contacts', [MailController::class, 'contact'])->name('contact');
Route::middleware(['throttle:global'])->group(function ()  {
    Route::post('/contacts', [MailController::class, 'sendMessageGoogle'])->name('send.message.google');
});
Route::post('/registered', [AuthController::class, 'registered'])->name('registered');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\AccountsController::class, 'show']);


//* Test Page
Route::get('/piggy', [App\Http\Controllers\PiggyController::class, 'piggy']);

//* Providers Page
Route::get('/providers', [App\Http\Controllers\ObproviderController::class, 'index']);

//* Payment History Page
Route::get('/history', [App\Http\Controllers\TxnhistoryController::class, 'index']);

//* Loan Page
Route::get('/loan', [App\Http\Controllers\LoanController::class, 'index']);

//* Payout Page
Route::get('/payout', [App\Http\Controllers\PayoutController::class, 'index']);

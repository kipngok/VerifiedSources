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

 /*   Route::get('/', function () {
return view('welcome');

});*/
Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/','App\Http\Controllers\ContactController');
Route::resource('/Field','App\Http\Controllers\FieldController');
Route::resource('/Package','App\Http\Controllers\PackageController');
Route::resource('/Payment','App\Http\Controllers\PaymentController');
Route::resource('/Source','App\Http\Controllers\SourceController');
Route::resource('/SourceField','App\Http\Controllers\SourceFieldController');
Route::resource('/Subscription','App\Http\Controllers\SubscriptionController');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

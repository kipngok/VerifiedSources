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
Route::resource('/contact','App\Http\Controllers\ContactController');
Route::resource('/field','App\Http\Controllers\FieldController');
Route::resource('/package','App\Http\Controllers\PackageController');
Route::resource('/payment','App\Http\Controllers\PaymentController');
Route::resource('/source','App\Http\Controllers\SourceController');
Route::get('/source/field/{id}','App\Http\Controllers\SourceController@field');
Route::resource('/sourceField','App\Http\Controllers\SourceFieldController');
Route::resource('/subscription','App\Http\Controllers\SubscriptionController');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

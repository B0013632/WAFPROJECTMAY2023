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


Route::resource('employees', App\Http\Controllers\employeesController::class);


Route::resource('customers', App\Http\Controllers\customersController::class);


Route::resource('tables', App\Http\Controllers\tablesController::class);


Route::resource('orders', App\Http\Controllers\ordersController::class);


Route::resource('reservations', App\Http\Controllers\reservationsController::class);


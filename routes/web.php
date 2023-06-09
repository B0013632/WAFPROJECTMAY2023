<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('customers', App\Http\Controllers\customersController::class);
Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create'); 

Route::resource('reservations', App\Http\Controllers\reservationsController::class);
Route::post('/reservations', 'App\Http\Controllers\ReservationsController@store')->name('reservations.store');


Route::get('/calendar/display', 'App\Http\Controllers\CalendarController@display')->name('calendar.display');
Route::get('/calendar/json','App\Http\Controllers\CalendarController@json')->name('calendar.json');

Route::resource('tables', App\Http\Controllers\tablesController::class);

Route::resource('orders', App\Http\Controllers\ordersController::class);

Route::resource('employees', App\Http\Controllers\employeesController::class);
Route::get('/loggedInEmployees','employeesController@getLoggedInEmployeesDetails');


//Route::resource('drinks', App\Http\Controllers\drinksController::class);
Route::get('drinks/displaygrid', 'App\Http\Controllers\drinksController@displaygrid')->name('drinks.displaygrid');

//Route::resource('drinks', 'drinksController');

Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);

Route::get('drinks/additem/{id}', 'App\Http\Controllers\drinksController@additem')->name('drinks.additem');


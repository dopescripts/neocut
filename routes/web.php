<?php

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
    return view('welcome');
});
// Route::get('/', [App\Http\Controllers\HomeController:: class , 'index']) ->name('home');
# Home route
Route::get('/', [\App\Http\Controllers\HomeController:: class, 'home']) ->name('home');
# services route
Route::get('/services', [\App\Http\Controllers\ServicesController:: class, 'services']) ->name('services');
#portfolio route
Route::get('/portfolio', [\App\Http\Controllers\PortfolioController:: class, 'portfolio']) ->name('portfolio');
#ADMIN DASHBOARD ROUTE
Route::get('/admin/dashboard', [\App\Http\Controllers\AdminHomeController:: class, 'index']) ->name('home');
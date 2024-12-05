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
Route::get('/', [App\Http\Controllers\HomeController:: class, 'home']) ->name('home');
# services route
Route::get('/services', [App\Http\Controllers\ServicesController:: class, 'services']) ->name('services');
#portfolio route
Route::get('/portfolio', [App\Http\Controllers\PortfolioController:: class, 'portfolio']) ->name('portfolio');
#ADMIN DASHBOARD ROUTE
Route::get('/admin/dashboard', [App\Http\Controllers\AdminHomeController:: class, 'index']) ->name('home');
Route::get('/admin/create', [App\Http\Controllers\AdminHomeController::class, 'create'])->name('create');
Route::get('/admin/table', [App\Http\Controllers\AdminHomeController::class, 'table'])->name('table');
Route::post('register/store', [App\Http\Controllers\AdminHomeController:: class, 'register_store'])->name('register.store');
Route::get('admin/edit{id}', [App\Http\Controllers\AdminHomeController::class, 'register_edit'])->name('register.edit');
Route::post('admin/update{id}', [App\Http\Controllers\AdminHomeController::class, 'register_update'])->name('register.update');
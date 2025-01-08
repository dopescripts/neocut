<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::view('/services2', 'web.pages.services')->name('services2');
#ADMIN DASHBOARD ROUTE
Route::prefix('admin',)->middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminHomeController:: class, 'index']) ->name('admin.home');
    Route::get('/create', [App\Http\Controllers\AdminHomeController::class, 'create'])->name('create');
    Route::get('/table', [App\Http\Controllers\AdminHomeController::class, 'table'])->name('table');
    Route::post('register/store', [App\Http\Controllers\AdminHomeController:: class, 'register_store'])->name('register.store');
    Route::get('/edit{id}', [App\Http\Controllers\AdminHomeController::class, 'register_edit'])->name('register.edit');
    Route::post('/update{id}', [App\Http\Controllers\AdminHomeController::class, 'register_update'])->name('register.update');
    Route::get('/delete{id}', [App\Http\Controllers\AdminHomeController::class, 'register_delete'])->name('register.delete');
});
Auth::routes();
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::view('/', 'frontEnd/index');

Route::resource ('Home',HomeController::class);

// route for dashboard

Route::get('/dashboard',[HomeController::class, 'dashboard']) -> name('dashboard.page');

Route::resource ('Bold',HomeController::class);

Route::resource ('Login',LoginController::class);


Route::resource ('Product',ProductController::class);





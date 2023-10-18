<?php

use App\Http\Controllers\ShopController;
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
    return view('main');
});

Route::get('Footer', function () {
    return view('footer');
});

Auth::routes();

Route::get('/main', [ShopController::class, 'main_show']);

Route::get('/about', [ShopController::class, 'about_us_show']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('main');

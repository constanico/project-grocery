<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/login', [ProfileController::class, 'login']);
Route::post('/postlogin', [ProfileController::class, 'postlogin']);
Route::get('/logout', [ProfileController::class, 'logout']);

Route::get('/register', [ProfileController::class, 'register']);
Route::post('/postregister', [ProfileController::class, 'postregister']);

Route::get('/home', [HomeController::class, 'home']);

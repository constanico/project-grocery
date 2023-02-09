<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
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

Route::get('/register', [ProfileController::class, 'register']);
Route::post('/postregister', [ProfileController::class, 'postregister']);
Route::get('/login', [ProfileController::class, 'login']);
Route::post('/postlogin', [ProfileController::class, 'postlogin']);
Route::get('/logout', [ProfileController::class, 'logout']);

Route::group(['middleware' => ['auth','checkrole:admin,user']], function(){
    Route::get('/home/en', [HomeController::class, 'homeEn']);
    Route::get('/home/id', [HomeController::class, 'homeId']);
    Route::get('/home/{id}', [HomeController::class, 'detailproduct']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/addToCart/{id}', [CartController::class, 'addToCart']);
    Route::get('/delete/{id}', [CartController::class, 'deleteCart']);
    Route::post('/checkout', [CartController::class, 'checkOut']);
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::put('/save', [ProfileController::class, 'save']);
});

Route::group(['middleware' => ['auth','checkrole:admin']], function(){
    Route::get('/maintenance', [ProfileController::class, 'maintenance']);
    Route::get('/update/{id}', [ProfileController::class, 'update']);
    Route::put('/update/{id}', [ProfileController::class, 'postupdate']);
});

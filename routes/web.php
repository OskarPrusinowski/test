<?php

use App\Http\Controllers\Cars\CarsController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\HomeController;
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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'homePage']);

Route::get('/cars/list', [CarsController::class, 'list']);

Route::get('/cars/{id}', [CarController::class, 'show']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/service/new', [ServiceController::class, 'create'])->middleware('auth');
Route::get('/service/getService', [ServiceController::class, 'getService']);
Route::get('/service/getServices', [ServiceController::class, 'getServices']);

Route::get('/user/{user_id}', [UserController::class, 'getUser']);

Route::get('/dashboard', [ServiceController::class, 'dashboard'])->middleware('auth');

Route::post('/service/{user_id}', [ServiceController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
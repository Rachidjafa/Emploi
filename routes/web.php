<?php

use App\Http\Controllers\EmploiController;
use App\Http\Controllers\GroupeController;
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

Route::resource('groupes',GroupeController::class);
Route::resource('emplois',EmploiController::class);

Route::get('/', function () {
    return view('welcome');
});

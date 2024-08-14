<?php

use App\Http\Controllers\EmploitController;
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

Route::get('/emploi/create/{id}',[EmploitController::class,'create'])->name('create');
Route::post('/emploi/store',[EmploitController::class,'store'])->name('store');

Route::post('/emploi/update/{id}',[EmploitController::class,'edit'])->name('update');

Route::delete('/emploi/{id}', [EmploitController::class, 'destroy'])->name('emploi.destroy');


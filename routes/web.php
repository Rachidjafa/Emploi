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

Route::get('/emploi/show/{id}',[EmploitController::class,'show'])->name('show');

Route::get('/emploi/show/update/{id}',[EmploitController::class,'edit'])->name('edit');
Route::post('/update/{id}',[EmploitController::class,'update'])->name('update');

Route::get('/', function () {
    return view('welcome');
});

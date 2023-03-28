<?php

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[HomeController::class,'home']);
Route::get('cargar/excel',[ExcelController::class,'index'])->name('cargar');
Route::get('informacion',[ExcelController::class,'info'])->name('informacion');

Route::post('importar',[ExcelController::class,'importar'])->name('importar');

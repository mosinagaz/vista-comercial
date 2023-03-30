<?php

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {return view('auth.login');});
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('home',[HomeController::class,'home']);
Route::get('informacion',[ExcelController::class,'info'])->name('informacion');
Route::get('informacion/gestor/{gestor}',[ExcelController::class,'info'])->name('informacion');
Route::post('informacion',[ExcelController::class,'filtrar'])->name('informacion');
Route::get('informacion/gestor/{gestor}',[ExcelController::class,'filtrarget']);

Route::middleware('auth')->group(function () {
    Route::get('cargar/excel',[ExcelController::class,'index'])->name('cargar');
    Route::post('importar',[ExcelController::class,'importar'])->name('importar');
});




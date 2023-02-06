<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BerandaController;
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

Route::get('/test', [BerandaController::class, 'viewtest'])->name('test');
Route::get('/Diagnosa', [BerandaController::class, 'viewDiagnosa'])->name('Diagnosa');
Route::post('/submit_diagnosa', [BerandaController::class,'submit_diagnosa'])->name('submit_diagnosa');
Route::get('/', [BerandaController::class, 'viewHome'])->name('Home');
Route::post('/postlogin', [AdminController::class, 'postlogin'])->name('postlogin');
Route::get('/login', [AdminController::class, 'viewLogin'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::group(['middleware' =>['auth']], function () {
    Route::get('/logs', [AdminController::class, 'viewLogs'])->name('logs');
    Route::get('/menerima/{id}', [AdminController::class, 'getmenerima'])->name('menerima');
    Route::get('/listgejala', [AdminController::class, 'viewGejala'])->name('gejala');
    Route::get('/listrelasi', [AdminController::class, 'viewRelasi'])->name('relasi');
    Route::get('/listpenyakit', [AdminController::class, 'viewPenyakit'])->name('penyakit');

});

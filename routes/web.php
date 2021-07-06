<?php

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

// Route::get('/', function () {
//     return view('v_dashboard');
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/Ph_Air', [App\Http\Controllers\PhController::class, 'index'])->name('ph_air');
Route::post('/Ph_Air/insert', [App\Http\Controllers\PhController::class, 'insert'])->name('insert');
Route::get('/aktivitas', [App\Http\Controllers\AktivitasController::class, 'index'])->name('aktivitas');
Route::post('/aktivitas/insert', [App\Http\Controllers\AktivitasController::class, 'insert']);
Route::get('/keuangan', [App\Http\Controllers\KeuanganController::class, 'index'])->name('keuangan');
Route::post('/keuangan/insert', [App\Http\Controllers\KeuanganController::class, 'insert']);
Route::get('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete']);
Route::get('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);


Auth::routes();

Route::group(['middleware' => 'Admin'], function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
    Route::post('/admin/update/{id}', [App\Http\Controllers\AdminController::class, 'update']);
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificationController;

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


Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/sertifikasi',[CertificationController::class, 'index'])->name('sertifikasi');
    Route::post('/sertifikasi',[CertificationController::class, 'store'])->name('submit.certificate');
});
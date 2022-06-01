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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profileinfo', [App\Http\Controllers\profileinfoController::class, 'index'])->name('info.profileinfo');

Route::get('/testresult', [App\Http\Controllers\testresultController::class, 'index'])->name('info.testeresult');

Route::get('/prescription', [App\Http\Controllers\prescriptionController::class, 'index'])->name('info.prescription');
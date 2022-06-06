<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);

// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Page
Route::get('/profileinfo', [App\Http\Controllers\profileinfoController::class, 'index'])->name('info.profileinfo');

// Test Page
Route::get('/testresult', [App\Http\Controllers\testresultController::class, 'index'])->name('info.testeresult');

// Prescription Page
Route::get('/prescription', [App\Http\Controllers\prescriptionController::class, 'index'])->name('info.prescription');

// Discharge Page
Route::get('/discharge', [App\Http\Controllers\dischargeController::class, 'index'])->name('info.discharge');

// Medication Page
Route::get('/medication', [App\Http\Controllers\medicationController::class, 'index'])->name('info.medication');

// Immunization Page
Route::get('/immunization', [App\Http\Controllers\immunizationController::class, 'index'])->name('info.immunizaion');

// Appointment Page
Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('telecare.appointment');

// Schedule Page
Route::get('/schedule', [App\Http\Controllers\scheduleController::class, 'index'])->name('telecare.schedule');

// Appointment Reference page
Route::get('/appointmentreference', [App\Http\Controllers\appointmentreferenceController::class, 'index'])->name('telecare.appointmentreference');

// Select Doctor Page
Route::get('/selectdoctor', [App\Http\Controllers\selectdoctorController::class, 'index'])->name('telecare.selectdoctor');


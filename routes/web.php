<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileinfoController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Page
Route::get('/profileinfo', [profileinfoController::class, 'index'])->name('info.profileinfo');
Route::get('/profileinfoedit', [profileinfoController::class, 'profileinfoEdit'])->name('info.profileinfoedit');

// Test Page
Route::get('/testresult', [App\Http\Controllers\testresultController::class, 'index'])->name('info.testeresult');

// Prescription Page
Route::get('/prescription', [App\Http\Controllers\prescriptionController::class, 'index'])->name('info.prescription');

// Prescription Edit Page
Route::get('/prescriptionedit', [App\Http\Controllers\prescriptioneditController::class, 'index'])->name('info.prescriptionedit');

// Discharge Page
Route::get('/discharge', [App\Http\Controllers\dischargeController::class, 'index'])->name('info.discharge');

// Medication Page
Route::get('/medication', [App\Http\Controllers\medicationController::class, 'index'])->name('info.medication');

// Immunization Page
Route::get('/immunization', [App\Http\Controllers\immunizationController::class, 'index'])->name('info.immunizaion');

// Appointment Page
Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('telecare.appointment');

// Schedule Page
Route::get('/schedule', [App\Http\Controllers\scheduleController::class, 'index'])->name('schedule.schedule');

// Appointment Reference page
Route::get('/appointmentreference', [App\Http\Controllers\appointmentreferenceController::class, 'index'])->name('telecare.appointmentreference');

// Appointment Page
Route::get('/appointmentstart', [App\Http\Controllers\appointmentstartController::class, 'index'])->name('telecare.appointmentstart');

// Appointment User Page
Route::get('/appointmentuser', [App\Http\Controllers\appointmentuserController::class, 'index'])->name('telecare.appointmentuser');

// Select Doctor Page
Route::get('/selectdoctor', [App\Http\Controllers\selectdoctorController::class, 'index'])->name('telecare.selectdoctor');







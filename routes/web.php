<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileinfoController;
use App\Http\Controllers\ProfileInfoEditController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminloginController;
use App\Http\Controllers\doctorlistController;
use App\Http\Controllers\prescriptionlistController;
use App\Http\Controllers\patientlistController;
use App\Http\Controllers\reportlistController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(["verified"]);

// Profile Page
Route::get('/profileinfo', [profileinfoController::class, 'index'])->name('info.profileinfo');
Route::get('/profileinfoedit',[ProfileInfoEditController::class,'index'])->name('info.profileinfoedit');
Route::post('/profileinfoUpdate',[ProfileInfoEditController::class,'create'])->name('info.update');
Route::get('/getprovinces/{id}', [ProfileInfoEditController::class,'getProvince']);
Route::get('/getmunicipality/{id}', [ProfileInfoEditController::class,'getMunicipality']);
Route::get('/getbarangays/{id}', [ProfileInfoEditController::class,'getBarangays']);
Route::get('/getzipcode/{id}', [ProfileInfoEditController::class,'getZipCode']);

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




// // Admin Dashboard
// Route::namespace("Admin")->prefix('admin')->group(function(){
//     Route::get('/dashboard', [dashboardController::class,'index'])->name('admin.dashboard');
//     Route::namespace('Auth')->group(function(){
//     Route::get('/adminlogin', [adminloginController::class, 'index'])->name('admin.adminlogin');
//     Route::post('/adminlogin', [adminloginController::class, 'adminloginFunction'])->name('admin.adminloginFunction');
//     Route::post('adminlogout', [adminloginController::class, 'logout'])->name('admin.logout');
//     Route::get('/doctorslist', [doctorlistController::class, 'index'])->name('admin.doctorslist');
//     Route::post('/adddoctor', [doctorlistController::class, 'addDoctor'])->name('admin.addDoctor');
//     Route::post('/editdoctor', [doctorlistController::class, 'editDoctorInformation'])->name('admin.editDoctorInformation');
//     Route::delete('/deletedoctor/{id}', [doctorlistController::class, 'destroy'])->name('admin.deleteDoctorsInformation');
//     Route::get('/prescriptionlist', [prescriptionlistController::class, 'index'])->name('admin.prescriptionlist');
//     Route::post('addPrescription',[prescriptionlistController::class,'addPrescription'])->name('admin.addPrescription');
//     Route::get('/patientlist',[patientlistController::class, 'index'])->name('admin.patientlist');
//     Route::get('/reportlist',[reportlistController::class, 'index'])->name('admin.reportlist');
//     });
//    });

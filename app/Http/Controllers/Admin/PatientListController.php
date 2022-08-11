<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientListController extends Controller
{
    //
    public function index(){
       $user = DB::table('users')->get();
       $gender = Gender::all();
       $doctor = Doctor::all();
       $admin = Admin::all();
       return view('auth.admin.patientlist',[
                'user' => $user,
                'gender' => $gender,
                'doctor' => $doctor,
                'admin' => $admin,
            ]);
    }

    public function addPatientList()
    {

    }
}

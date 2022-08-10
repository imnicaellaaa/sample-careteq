<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gender;
use App\Models\Doctor;

class patientlistController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
       $gender = Gender::all();
       $doctor = Doctor::all();
       return view('admin.patientlist',[
                'user' => $user,
                'gender' => $gender,
                'doctor' => $doctor,
            ]);
     }

     public function addPatientList()
     {

     }
}

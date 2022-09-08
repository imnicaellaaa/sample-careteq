<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Gender;
use App\Models\ProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientListController extends Controller
{
    //
    public function index(){
       $user = DB::table('users')->get();
       $profileinfo = ProfileInfo::all();
       $gender = Gender::all();
       $doctor = Doctor::all();
       $admin = Admin::all();

       foreach ($profileinfo as $profileinfos){
        $value = $profileinfos;
    }
    //    dd($value->bday->date_format('MM/DD/YYYY'));
       return view('auth.admin.patientlist',[
                'value' => $value,
                'gender' => $gender,
                'doctor' => $doctor,
                'admin' => $admin,
                'profileinfo' => $profileinfo,
            ]);
    }

    public function addPatientList()
    {

    }
}

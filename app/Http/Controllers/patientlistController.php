<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gender;

class patientlistController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        $gender = Gender::all();
        return view('admin.patientlist',[
                 'user' => $user,
                 'gender' => $gender,
             ]);
     }

     public function addPatientList()
     {

     }
}

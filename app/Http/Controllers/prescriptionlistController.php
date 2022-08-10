<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescriptions;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class prescriptionlistController extends Controller
{
    public function index()
    {
        $prescription = Prescriptions::all();
        $doctor = Doctor::all();
        $user = User::all();
        return view("admin.prescriptionlist",[
                    'prescription' => $prescription,
                    'doctor' => $doctor,
                    'user' => $user,
        ]);
    }

    public function addPrescription(Request $request)
    {
        if ($query = DB::table('prescriptions')
        ->insert(['item_code' => $request->prescriptionItemCode,
                  'item_description' => $request->prescriptionItemDescription,
                  'dosage' => $request->dosage,
                  'instruction' => $request->instruction,
                  'created_at' => Carbon::now()
                ]))

                {
                    // return $request->avatar->request()->file('avatar')->getClientOriginalName();

                    return view("admin.prescriptionlist");
                }

                else{
                    return view("admin.prescriptionlist");
                }
    }
}

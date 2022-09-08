<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Prescriptions;
use App\Models\ProfileInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PrescriptionListControler extends Controller
{
    //
    public function index()
    {
        $prescription = Prescriptions::all();
        $doctor = Doctor::all();
        $profileinfo = ProfileInfo::all();
        $admin = Admin::all();


        foreach ($profileinfo as $profileinfos){
            $value = $profileinfos;
        }

        return view("auth.admin.prescriptionlist",[
                    'prescription' => $prescription,
                    'doctor' => $doctor,
                    'profileinfo' => $profileinfo,
                    'value' => $value,
                    'admin' => $admin,
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

                    return view("auth.admin.prescriptionlist");
                }

                else{
                    return view("auth.admin.prescriptionlist");
                }
    }

    // public function addPrescription(Request $request)
    // {
    //     if ($query = DB::table('prescriptions')
    //                 ->insert(['item_code' => $request->prescriptionItemCode,
    //                           'item_description' => $request->prescriptionItemDescription,
    //                           'dosage' => $request->dosage,
    //                           'instruction' => $request->instruction,

    //                 ]))
    //     {

    //     }
    // }
}

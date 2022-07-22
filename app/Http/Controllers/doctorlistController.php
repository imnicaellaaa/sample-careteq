<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abbreviation;
use App\Models\Doctor;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class doctorlistController extends Controller
{
   //
   public function index()
   {
       $abbreviation  = Abbreviation::all();
       $specialization = Specialization::all();
       $doctors = Doctor::all();
       return view('admin.doctorlist',[
           'abbreviation' => $abbreviation,
           'specialization' => $specialization,
           'doctor' => $doctors,
       ]);
   }

   public function addDoctor(Request $request)
   {
       if ($query = DB::table('doctors')
                ->insert(['license_no'=>$request->license_no,
                           'title'=>$request->abbreviation,
                           'firstname'=>$request->firstname,
                           'lastname'=>$request->lastname,
                           'email'=>$request->email,
                           'contact_no'=>$request->contact_no,
                           'hospital_name'=>$request->hospital_name,
                           'specialization'=>$request->specialization,
                           'created_at' => Carbon::now()
               ]))

               {
                   // return $request->avatar->request()->file('avatar')->getClientOriginalName();

                   return redirect()->back()->with('message', 'You successfully registered a Doctor');
               }

               else{
                   return redirect()->back()->with('error', 'Registration of a Doctor is not successful');
               }
   }

   public function editDoctorInformation(Request $request)
   {
       if ($query = DB::table('doctors')
                ->where('id', $request->doctors_id)
                ->update(['license_no'=>$request->license_no,
                           'title'=>$request->abbreviation,
                           'firstname'=>$request->firstname,
                           'lastname'=>$request->lastname,
                           'email'=>$request->email,
                           'contact_no'=>$request->contact_no,
                           'hospital_name'=>$request->hospital_name,
                           'specialization'=>$request->specialization,
                           'updated_at' => Carbon::now()
               ]))

               {


                   return redirect()->back()->with('message', 'You successfully updated a Doctor Information');
               }

               else{
                   return redirect()->back()->with('error', 'Updating of a Doctor Information is not successful');
               }
   }

   // public function destroy($id)
   //    {

   //     // DB::table('doctors')->where('id', '=', $id)->delete();

   //       DB::delete('DELETE FROM doctors WHERE id = ?', [$id]);
   //       return redirect()->back();
   //    }
}

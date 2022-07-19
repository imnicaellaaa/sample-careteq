<?php

namespace App\Http\Controllers;


use App\Models\Title;
use App\Models\Gender;
use App\Models\Country;
use App\Models\MemberCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ProfileInfoEditController extends Controller
{

    public function index(){

             $title = Title::all();
             $gender = Gender::all();
             $country = Country::all();
             $member_category = MemberCategory::all();

        return view('info.profileinfoedit',[
                 'title' => $title,
                 'gender' => $gender,
                 'country' => $country,
                 'member_category' => $member_category,
                 'user' => Auth::user()
        ]);
    }

    public function getProvince(Request $request)
    {
        $id = $request->country_code;
        //     //     return $id;
        // // return var_dump($request);
        // // $country_id = DB::table('provinces')->select("")
        $province = DB::table('provinces')
                    ->select("province")
                    ->where('country_code',$id)
                    ->groupBy('province')
                    ->get();
        // return var_dump($province);
        return $province;
        // return response()->json($province);
    }

    public function getMunicipality(Request $request)
    {
        // return $id;
        $province = $request->province;

        $municipality =  DB::table('provinces')
                        ->select("municipality")
                        ->where('province', $province)
                        ->groupBy('municipality')
                        ->get();
        return $municipality;
    }

    public function getBarangays(Request $request)
    {
        $municipality = $request->municipality;

        $barangay = DB::table('provinces')
                    ->select("barangay")
                    ->where('municipality', $municipality)
                    ->get();
        return $barangay;
    }

    public function getZipCode(Request $request)
    {
        $barangay = $request->barangay;
        $province = $request->province;
        $zip_code = DB::table('provinces')
                    ->select("zip_code")
                    ->where("barangay", $barangay)
                    ->where("province", $province)
                    ->get();
        return $zip_code;
    }

    protected function validator(array $data)
    {
            return Validator::make($data, [
                'firstname' => ['string','max:255'],
                'middlename' => ['string','max:255'],
                'lastname' => ['string','max:255'],
                'bday' => ['date'],
                'gender' => ['string', 'max:255'],
                'suffix' => ['string', 'max:255'],
                'title' => ['string', 'max:255'],
                'houseNo_streetName' => ['string','max:255'],
                'postal_code' => ['integer'],
                'brgy' => ['string', 'max:255'],
                'municipality' => ['string','max:255'],
                'province' => ['string', 'max:255'],
                'country' => ['string','max:255'],
                'centimeter' => ['float'],
                'inches' => ['float'],
                'kilogram' => ['float'],
                'pounds' => ['float'],
                'bmi' => ['float'],
                'philhealth_no' => ['integer'],
                'member_category' =>['string', 'max:255'],
                'health_insurance' => ['integer'],
                'membership_no' => ['integer'],
                'plan_name' =>['string', 'max:255'],
                'avatar' => ['image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        ]);

    }

    public function create(Request $request)
    {
        $avatars = request()->file( key: 'avatar')->getClientOriginalName();
        request()->file( key: 'avatar')->move('images/uploads/avatars_userstable', $avatars);
        $imagePath = $avatars;

        // $avatar = request()->file( key: 'avatar')->getClientOriginalName();
        // request()->file( key: 'avatar')->move('images/uploads/avatars_profileinfotable', $avatar);
        // $imagePath2 = $avatar;

        //saving all the inputed data to the profile_information database
        // if($query2 = DB::table('profileinfo')
        //              ->where('id', $request->user_id)
        //              ->insert(['firstname'=>$request->firstname,
        //                 'middlename'=>$request->middlename,
        //                 'lastname'=>$request->lastname,
        //                 'patient_id'=>$request->patient_id,
        //                 'bday' =>$request->bday,
        //                 'age'=>$request->age,
        //                 'suffix'=>$request->suffix,
        //                 'telno' =>$request->telno,
        //                 'mobile_no'=>$request->mobile_no,
        //                 'title' => $request->title,
        //                 'gender' =>$request->gender,
        //                 'houseNo_streetName'=>$request->houseNo_streetName,
        //                 'brgy' => $request->brgy,
        //                 'postal_code'=>$request->postal_code,
        //                 'municipality'=>$request->municipality,
        //                 'province' =>$request->province,
        //                 'country'=>$request->country,
        //                 'centimeter'=>$request->centimeter,
        //                 'inches' =>$request->inches,
        //                 'kilogram' => $request->kilogram,
        //                 'pounds' =>$request->pounds,
        //                 'bmi' =>$request->bmi,
        //                 'philhealth_no' =>$request->philhealth_no,
        //                 'member_category' =>$request->member_category,
        //                 'health_insurance' =>$request->health_insurance,
        //                 'membership_no' =>$request->membership_no,
        //                 'plan_name' => $request->plan_name,
        //                 'edited_by' => $request->user_id,
        //                 'user_role' => $request->user_role,
        //                 'updated_at' => Carbon::now(),
        //                 // 'avatar' => $imagePath2,

        // ]))
        //updating data in users table
       if( $query = DB::table('users')
                ->where('id', $request->user_id)
                ->update(['firstname'=>$request->firstname,
                        'middlename'=>$request->middlename,
                        'lastname'=>$request->lastname,
                        'patient_id'=>$request->patient_id,
                        'bday' =>$request->bday,
                        'age'=>$request->age,
                        'suffix'=>$request->suffix,
                        'telno' =>$request->telno,
                        'mobile_no'=>$request->mobile_no,
                        'title' => $request->title,
                        'gender' =>$request->gender,
                        'houseNo_streetName'=>$request->houseNo_streetName,
                        'brgy' => $request->brgy,
                        'postal_code'=>$request->postal_code,
                        'municipality'=>$request->municipality,
                        'province' =>$request->province,
                        'country'=>$request->country,
                        'centimeter'=>$request->centimeter,
                        'inches' =>$request->inches,
                        'kilogram' => $request->kilogram,
                        'pounds' =>$request->pounds,
                        'bmi' =>$request->bmi,
                        'philhealth_no' =>$request->philhealth_no,
                        'member_category' =>$request->member_category,
                        'health_insurance' =>$request->health_insurance,
                        'membership_no' =>$request->membership_no,
                        'plan_name' => $request->plan_name,
                        'avatar' => $imagePath,



        ])){
            return redirect()->back()->with('message', 'Profile Information updated');
        }
        else{
            return redirect()->back()->with('error', 'Profile Information has not been updated succesfuly');
        }
        // $query2 = DB::table('profileinfo')->insert([
        //     'firstname'=>$request->input('firstname'),
        //     'middlename'=>$request->input('middlename'),
        //     'lastname'=>$request->input('lastname')

        // ]);


        // return redirect(route('info.profileinfo'));


    }


}

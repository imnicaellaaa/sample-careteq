<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Barangays;
use App\Models\Title;
use App\Models\Gender;
use App\Models\Country;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\MemberCategory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileInfoEditController extends Controller
{

    public function index(){

             $title = Title::all();
             $gender = Gender::all();
             $country = Country::all();
             $province = Province::all();
             $municipality = Municipality::all();
             $member_category = MemberCategory::all();
             $barangay = Barangays::all();

        return view('info.profileinfoedit',[
                 'title' => $title,
                 'gender' => $gender,
                 'country' => $country,
                 'province' => $province,
                 'municipality' => $municipality,
                 'member_category' => $member_category,
                 'brgy' => $barangay,
                 'user' => Auth::user()
        ]);
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
            'telno' => ['integer'],
            'mobile_no' => ['integer'],
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
            'philhealth_no' => ['required','integer'],
            'member_category' =>['required', 'string', 'max:255'],
            'health_insurance' => ['required', 'integer'],
            'membership_no' => ['required','integer'],
            'plan_name' =>['required', 'string', 'max:255'],
            'approval_number' =>['required','integer'],
            'avatar' => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        ]);

    }

    public function create(Request $request)
    {
        $avatars = request()->file( key: 'avatar')->getClientOriginalName();
        request()->file( key: 'avatar')->move('images/uploads/avatars', $avatars);
        $imagePath = $avatars;

        //saving all the inputed data to the profile_information database
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
                        'approval_number' =>$request->approval_number,
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

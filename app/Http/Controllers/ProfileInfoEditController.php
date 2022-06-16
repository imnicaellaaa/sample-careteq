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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        ]);
    }


}

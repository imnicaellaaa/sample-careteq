<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UpdateProfileRequest;
use App\Models\Barangay;
use App\Models\Title;
use App\Models\Gender;
use App\Models\Country;
use App\Models\HealthInsurance;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\MemberCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\File\File;
use Intervention\Image\Facades\Image;


class ProfileInfoEditController extends Controller
{

    public function index(){

             $title = Title::all();
             $gender = Gender::all();
             $country = Country::all();
             $member_category = MemberCategory::all();
             $hmo = HealthInsurance::all();


        return view('info.profileinfoedit',[
                 'title' => $title,
                 'gender' => $gender,
                 'country' => $country,
                 'member_category' => $member_category,
                 'user' => Auth::user(),
                 'hmo' => $hmo,
        ]);
    }

    public function getProvince(Request $request)
    {
        $id = $request->country_name;
        //     //     return $id;
        // // return var_dump($request);
        // // $country_id = DB::table('provinces')->select("")
        $province = DB::table('provinces')
                    ->select("province")
                    ->where('country_name',$id)
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



    // public function update_avatar(Request $request)
    // {
    //     if ($request->hasFile('avatar')){
    //         $avatar = $request->file('avatar');
    //         $filename = time() . '.' . $avatar->getClientOriginalExtension();
    //         Image::make($avatar)->save(public_path('images/uploads/avatars' . $filename));

    //         if ($name = request()->hasFile( key: 'avatars')) {
    //             $avatar = request()->file( key: 'avatars')->getClientOriginalName();
    //             request()->file( key: 'avatars')->move('images/uploads/avatars', $avatar);
    //             $request->update(['avatars' => $avatar]);


    //     }
    //     return view('profile', array('user' =>Auth::user()));
    // }
    // public function uploadProfilePhoto(Request $request){
    //     $request->validate([
    //         'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $user = Auth::user();

    //     $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

    //     $request->avatar->storeAs('images/uploads/upload_id',$avatarName);

    //     $user->avatar = $avatarName;
    //     $user->DB::updateDB::table('users')
    //     ->where('id', $request->user_id)
    //     ->update(['avatar'=>$request->avatar]);

    //     return back()
    //         ->with('success','You have successfully upload image.');

    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'gender' => ['string', 'max:255'],
            'suffix' => ['string', 'max:255'],
            'title' => ['string', 'max:255'],
            'houseNo_streetName' => ['string','max:255'],
            'postal_codee' => ['integer'],
            'brgyname' => ['string', 'max:255'],
            'municipalityname' => ['string','max:255'],
            'provincename' => ['string', 'max:255'],
            'countryname' => ['string','max:255'],
            'centimeter' => ['float'],
            'inches' => ['float'],
            'kilogram' => ['float'],
            'pounds' => ['float'],
            'bmi' => ['float'],
            'philhealth_no' => ['integer'],
            'member_category' =>['string', 'max:255'],
            'hmo' => ['integer'],
            'membership_no' => ['integer'],
            'plan_name' =>['string', 'max:255'],
            'avatar' => ['nullable','image|mimes:jpeg,png,jpg,gif,svg|max:1024']
        ]);

    }

    public function create(Request $request)
    {
        {
            $est =DB::table('users')->where('id','=',$request->user_id)->get();
          $oldimage=$est[0]->avatar;
          $fileNameToStore=$oldimage;

        //   dd($request->hasFile('avatar'));
          if($request->hasFile('avatar')){
             $this->validate($request,['avatar'=>'image|nullable|max:1999']);

             //get file name with extension
             $filenameWithExt=$request->file('avatar')->getClientOriginalName();
            //  dd($filenameWithExt);
             //getjust file name
             $fileName=pathinfo($filenameWithExt, PATHINFO_FILENAME);
             //get jsut ext
             $extension=$request->file('avatar')->getClientOriginalExtension();
             //file name to store
             $fileNameToStore=$fileName.'_'.time().'.'.$extension;
             // echo $fileNameToStore;die();
             //upload images
             $path=$request->file('avatar')->storeAs('public/images/uploads/avatars_userstable',$fileNameToStore);
             $newimage=$fileNameToStore;
         }

      $data = ['patient_id'=>$request->patient_id,
                'suffix'=>$request->suffix,
                'telno' =>$request->telno,
                'mobile_no'=>$request->mobile_no,
                'title' => $request->title,
                'gender' =>$request->gender,
                'houseNo_streetName'=>$request->houseNo_streetName,
                'brgy' => $request->brgyname,
                'postal_code'=>$request->postal_codee,
                'municipality'=>$request->municipalityname,
                'province' =>$request->provincename,
                'country'=>$request->countryname,
                'centimeter'=>$request->centimeter,
                'inches' =>$request->inches,
                'kilogram' => $request->kilogram,
                'pounds' =>$request->pounds,
                'bmi' =>$request->bmi,
                'philhealth_no' =>$request->philhealth_no,
                'member_category' =>$request->member_category,
                'health_insurance' =>$request->hmo,
                'membership_no' =>$request->membership_no,
                'plan_name' => $request->plan_name,
                'avatar' => $fileNameToStore];
                // dd(DB::table('users')->where('id', $request->user_id)->where('avatar', $fileNameToStore)->exists());
            if (DB::table('users')->where('id', $request->user_id)->where('avatar', $fileNameToStore)->exists()) {
                DB::table('users')->where('id', $request->user_id)
                                ->update(['avatar' => $fileNameToStore]);
                                // dd(DB::table('users')->where('id', $request->user_id)->where('avatar', $fileNameToStore)
                                // ->update(['avatar' => $fileNameToStore]));
            }

         DB::table('users')->where('id', $request->user_id)
             ->update($data);
             return redirect('profileinfoedit')->with('message', 'Profile Information updated');
    }

    }
    public function uploadProfilePhoto(Request $request)
    {
        $avatars = request()->file('avatar')->getClientOriginalName();
        request()->file('avatar')->move('images/uploads/avatars', $avatars);
        $imagePath = $avatars;
        //saving all the inputed data to the profile_information database
       if( $query = DB::table('users')
                ->where('id', $request->user_id)
                ->update(['avatars'=>$imagePath,]));
    }







}


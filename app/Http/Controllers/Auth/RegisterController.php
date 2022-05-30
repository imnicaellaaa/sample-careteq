<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    use PasswordValidationRules;
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'bday' => ['date'],
            'country' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'municipality' => ['required', 'string', 'max:255'],
            'brgy' => ['required', 'string', 'max:255'],
            'houseNo_streetName' => ['required', 'string', 'max:255'],
            'patient_id' => ['max:255'],
            'id_type' => ['required', 'string', 'max:255'],
            'id_no' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user =  User::create([
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'bday' => $data['bday'],
            'age' => $data['age'],
            'suffix' => $data['suffix'],
            'gender' => $data['gender'],
            'title' => $data['title'],
            'country' =>$data['country'],
            'province' => $data['province'],
            'municipality' => $data['municipality'],
            'brgy' => $data['brgy'],
            'houseNo_streetName' => $data['houseNo_streetName'],
            'postal_code' => $data['postal_code'],
            'status' => $data['status'],
            'patient_id' =>$data['patient_id'],
            'id_type' => $data['id_type'],
            'id_no' => $data['id_no'],
            'upload_id' => $data['upload_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        if (request()->hasFile( key: 'upload_id')) {
            $upload_id = request()->file( key: 'upload_id')->getClientOriginalName();
            request()->file( key: 'upload_id')->storeAs( path: 'id_upload', name: $user->id . '/' . $upload_id, options: '');
            $user->update(['upload_id' => $upload_id]);
        }
        return $user;
    }
}

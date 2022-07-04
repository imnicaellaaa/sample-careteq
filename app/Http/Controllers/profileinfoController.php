<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileinfoController extends Controller
{
    public function index(){
        // $query = User::all();
        return view("info.profileinfo", array('user' => Auth::user()));
    }


}

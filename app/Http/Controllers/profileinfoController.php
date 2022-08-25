<?php

namespace App\Http\Controllers;

use App\Models\ProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class profileinfoController extends Controller
{
    public function index(){


        $profileinfo = ProfileInfo::all();

        return view('info.profileinfo',[
                 'profileinfo' => $profileinfo]);
    }


}

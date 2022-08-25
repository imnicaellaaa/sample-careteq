<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profileinfo = DB::table('profile_infos')->where('id', Auth::user()->id)->get();

        return view('info.profileinfo',[
                 'profileinfo' => $profileinfo]);
    }
}

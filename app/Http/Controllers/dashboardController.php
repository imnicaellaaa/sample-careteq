<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;

class dashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_id = Admin::all();
        $admin = DB::table('admins')
            ->where('id', 1)
            ->get();
        return view('admin.dashboard',[
            'admin' => $admin,
            'admin_id' =>$admin_id
        ]);
    }
}


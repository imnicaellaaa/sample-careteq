<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\ProfileInfo;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
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
    public function index(Request $request)
    {
        $admin_id = Admin::all();
       $profileinfo = ProfileInfo::all();
        $doctor = Doctor::all();
        $admin = DB::table('admins')
            ->where('id', 1 )
            ->get();
            foreach ($profileinfo as $profileinfos){
                $value = $profileinfos;
            }
            // dd($value['firstname']);
        return view('auth.admin.dashboard',[
            'admin' => $admin,
            'admin_id' =>$admin_id,
            'value' => $value,
            'doctor' => $doctor,
        ]);
    }
}

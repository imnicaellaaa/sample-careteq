<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;
use App\Models\User;
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
    public function index()
    {
        $admin_id = Admin::all();
        $user = User::all();
        $doctor = Doctor::all();
        $admin = DB::table('admins')
            ->where('id', 1)
            ->get();
        return view('auth.admin.dashboard',[
            'admin' => $admin,
            'admin_id' =>$admin_id,
            'user' => $user,
            'doctor' => $doctor,
        ]);
    }
}

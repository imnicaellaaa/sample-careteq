<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminloginController extends Controller
{
    public function index(){
        return view("admin.adminlogin");
    }
}

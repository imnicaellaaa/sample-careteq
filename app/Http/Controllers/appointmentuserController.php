<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentuserController extends Controller
{
    public function index(){
        return view("telecare.appointmentuser");
    }
}

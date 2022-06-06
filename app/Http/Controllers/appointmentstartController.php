<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentstartController extends Controller
{
    public function index(){
        return view("telecare.appointmentstart");
    }
}

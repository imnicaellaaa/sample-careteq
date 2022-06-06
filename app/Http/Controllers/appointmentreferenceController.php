<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentreferenceController extends Controller
{
    public function index(){
        return view("telecare.appointmentreference");
    }
}

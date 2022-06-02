<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index(){
        return view("telecare.appointment");
    }
}

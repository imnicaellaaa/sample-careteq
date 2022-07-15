<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientlistController extends Controller
{
    public function index(){
        return view("admin.patientlist");
    }
}

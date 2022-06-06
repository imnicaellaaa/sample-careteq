<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class selectdoctorController extends Controller
{
    public function index(){
        return view("telecare.selectdoctor");
    }
}

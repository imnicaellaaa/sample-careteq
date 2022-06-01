<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prescriptionController extends Controller
{
    public function index(){
        return view("info.prescription");
    }
}

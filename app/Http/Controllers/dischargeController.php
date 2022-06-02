<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dischargeController extends Controller
{
    public function index(){
        return view("info.discharge");
    }
}

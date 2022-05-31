<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testresultController extends Controller
{
    public function index(){
        // return("hello word");
        return view("info.profileinfo");
    }
}

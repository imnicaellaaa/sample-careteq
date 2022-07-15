<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportlistController extends Controller
{
    public function index(){
        return view("admin.reportlist");
    }
}

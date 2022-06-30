<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorlistController extends Controller
{
    public function index()
    {
        return view("admin.doctorlist");
    }
}

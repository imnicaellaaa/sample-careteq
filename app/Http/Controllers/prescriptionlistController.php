<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prescriptionlistController extends Controller
{
    public function index()
    {
        return view("admin.prescriptionlist");
    }
}

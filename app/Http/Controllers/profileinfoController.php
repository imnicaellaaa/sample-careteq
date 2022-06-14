<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileinfoController extends Controller
{
  public function index(){
      return view("info.profileinfo");
  }

  public function profileinfoEdit(){
    return view("info.profileinfoedit");
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aboutuscontroller extends Controller
{
    public function about(){
        return view('aboutUS');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bookingcontroller extends Controller
{
    public function booking(){
        return view('booking');
    }
}

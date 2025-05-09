<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faqcontroller extends Controller
{
    public function faq(){
        return view('faq');
    }
}

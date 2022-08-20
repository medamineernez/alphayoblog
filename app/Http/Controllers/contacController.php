<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contacController extends Controller
{
    public function index(){
        
        return view('contact');
    }
}

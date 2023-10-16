<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // You can fetch data or perform any other necessary operations here.
        return view('home'); // 'home' is the name of the Blade view file for your homepage.
    }
    
}


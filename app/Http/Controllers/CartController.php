<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Fetch the user's cart items here.
        return view('cart'); // 'cart' is the name of the Blade view file for the cart page.
    }
    
}

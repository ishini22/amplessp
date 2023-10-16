<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\User;

class WishListController extends Controller
{
    public function index()
    {
        // Fetch the user's wishlist data here.
        return view('wishlist'); // 'wishlist' is the name of the Blade view file for the wishlist page.
    }
}

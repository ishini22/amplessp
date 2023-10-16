<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
{
    // Fetch the user's account data here.
    return view('account'); // 'account' is the name of the Blade view file for the account page.
}

}

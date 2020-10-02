<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login_form()
    {
        return view('login.login_page');
    }

    //Register Form view
    function register_form()
    {
        return view('login.register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contactUs()
    {
        return view('contact_us');
    }

    public function loginRegister()
    {
        return view('login_register');
    }


}

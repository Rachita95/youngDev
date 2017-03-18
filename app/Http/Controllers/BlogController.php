<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function googleSelfDrive()
    {
        return view('blogs/google_self_drive');
    }

    public function collegeDropouts()
    {
        return view('blogs/college_dropouts');
    }

    public function digilocker()
    {
        return view('blogs/digilocker');
    }

}

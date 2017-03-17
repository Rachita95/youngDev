<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{

    /**********open office impress *************/
    public function impressIntro()
    {
        return view('tutorials/openoffice_impress/what_is_impress');
    }
    public function impressFirst()
    {
        return view('tutorials/openoffice_impress/my_first_presentation');
    }
    public function impressTemplate()
    {
        return view('tutorials/openoffice_impress/using_a_template');
    }
    public function impressBlank()
    {
        return view('tutorials/openoffice_impress/a_blank_presentation');
    }
    public function impressSave()
    {
        return view('tutorials/openoffice_impress/save_and_close');
    }
    public function impressOpen()
    {
        return view('tutorials/openoffice_impress/open_existing');
    }
    public function impressSlideBasics()
    {
        return view('tutorials/openoffice_impress/slide_basics');
    }
    public function impressOrganisingSlides()
    {
        return view('tutorials/openoffice_impress/organising_slides');
    }
    public function impressSlideTransition()
    {
        return view('tutorials/openoffice_impress/slide_transition');
    }

    /** **************************************************** */


}

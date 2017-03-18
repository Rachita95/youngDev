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


    /**********open office install*************/
    public function officeIntro()
    {
        return view('tutorials/installation/what_is_openoffice');
    }
    public function officeInstall()
    {
        return view('tutorials/installation/download_install');
    }
    public function officeFirstTime()
    {
        return view('tutorials/installation/first_time');
    }
    /** **************************************************** */


    /**********open office writer *************/
    public function writerIntro()
    {
        return view('tutorials/openoffice_writer/what_is_writer');
    }
    public function writerStart()
    {
        return view('tutorials/openoffice_writer/my_first_document');
    }
    public function writerTextBasics()
    {
        return view('tutorials/openoffice_writer/text_basics');
    }
    public function writerTextFormatting()
    {
        return view('tutorials/openoffice_writer/text_formatting');
    }
    public function writerGraphics()
    {
        return view('tutorials/openoffice_writer/graphics');
    }
    public function writerTables()
    {
        return view('tutorials/openoffice_writer/tables');
    }
    /** **************************************************** */


    /********** digilocker *************/
    public function digilockerIntro()
    {
        return view('tutorials/digilocker/introduction');
    }
    public function digilockerUserIdCreation()
    {
        return view('tutorials/digilocker/user_id_creation');
    }
    public function digilockerSignIn()
    {
        return view('tutorials/digilocker/sign_in');
    }
    public function digilockerUploadDocuments()
    {
        return view('tutorials/digilocker/upload_documents');
    }
    public function digilockerViewCertificates()
    {
        return view('tutorials/digilocker/view_certificates');
    }
    public function digilockerESignDocument()
    {
        return view('tutorials/digilocker/esign_document');
    }
    public function digilockerShareDocument()
    {
        return view('tutorials/digilocker/share_document');
    }
    public function digilockerViewIssuedDocument()
    {
        return view('tutorials/digilocker/view_issued_document');
    }
    public function digilockerViewActivity()
    {
        return view('tutorials/digilocker/view_activity');
    }
    public function digilockerViewIssuers()
    {
        return view('tutorials/digilocker/view_issuers');
    }

    /** **************************************************** */


}

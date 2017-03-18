<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** main pages common in whole website */
Route::get('/', 'FrontController@index');
Route::get('/tech-news', 'FrontController@techNews');
Route::get('/contact-us', 'FrontController@contactUs');

Route::get('/login-register', 'FrontController@loginRegister');
Route::get('/coming-soon', 'FrontController@comingSoon');

 /** ************************************* */

 /** tutorials controller************************** */

 /** openoffice impress *********************************/
Route::get('/what-is-impress', 'TutorialsController@impressIntro');
Route::get('/my-first-presentation', 'TutorialsController@impressFirst');
Route::get('/using-a-template', 'TutorialsController@impressTemplate');
Route::get('/a-blank-presentation', 'TutorialsController@impressBlank');
Route::get('/save-and-close', 'TutorialsController@impressSave');
Route::get('/open-existing', 'TutorialsController@impressOpen');
Route::get('/slide-basics', 'TutorialsController@impressSlideBasics');
Route::get('/organising-slides', 'TutorialsController@impressOrganisingSlides');
Route::get('/slide-transition', 'TutorialsController@impressSlideTransition');
/**********************************************************/

/** openoffice install *********************************/
Route::get('/what-is-openoffice', 'TutorialsController@officeIntro');
Route::get('/download-install', 'TutorialsController@officeInstall');
Route::get('/first-time', 'TutorialsController@officeFirstTime');
/**********************************************************/

/** openoffice writer *********************************/
Route::get('/what-is-writer', 'TutorialsController@writerIntro');
Route::get('/my-first-document', 'TutorialsController@writerStart');
Route::get('/text-basics', 'TutorialsController@writerTextBasics');
Route::get('/text-formatting', 'TutorialsController@writerTextFormatting');
Route::get('/graphics', 'TutorialsController@writerGraphics');
Route::get('/tables', 'TutorialsController@writerTables');

/**********************************************************/

/** openoffice impress *********************************/
Route::get('/digilocker-introduction', 'TutorialsController@digilockerIntro');
Route::get('/digilocker-user-id-creation', 'TutorialsController@digilockerUserIdCreation');
Route::get('/digilocker-sign-in', 'TutorialsController@digilockerSignIn');
Route::get('/digilocker-uploading-documents', 'TutorialsController@digilockerUploadDocuments');
Route::get('/digilocker-view-certificates', 'TutorialsController@digilockerViewCertificates');
Route::get('/digilocker-esign-documents', 'TutorialsController@digilockerESignDocument');
Route::get('/digilocker-share-document', 'TutorialsController@digilockerShareDocument');
Route::get('/digilocker-view-issued-documents', 'TutorialsController@digilockerViewIssuedDocument');
Route::get('/digilocker-view-activity', 'TutorialsController@digilockerViewActivity');
Route::get('/digilocker-view-issuers', 'TutorialsController@digilockerViewIssuers');

/**********************************************************/

/** openoffice impress *********************************/
Route::get('/google-self-driving-car', 'BlogController@googleSelfDrive');
Route::get('/college-dropouts', 'BlogController@collegeDropouts');
Route::get('/digilocker', 'BlogController@digilocker');
/** ****************************************************88 */

 /*******************************************************/

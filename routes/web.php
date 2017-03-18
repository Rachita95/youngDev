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

Route::get('/contact-us', 'FrontController@contactUs');

Route::get('/login-register', 'FrontController@loginRegister');

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


 /*******************************************************/

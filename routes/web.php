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


 /*******************************************************/

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('users', function()
{
    return 'Users!';
});

Route::get('users', function()
{
    return View::make('users');
});

/*Route::get('users', 'UserController@getIndex');*/

//Route::get('showProfile','UserController@showProfile');

/* My application routes */


Route::get('index',function(){
	return View('index');
});

Route::get('/', function(){
	return view('index');
});

Route::get('AboutUs', function(){ return view('AboutUs'); });
	
Route::get('ContactUs', function(){ return view('ContactUs'); });

Route::get('Testinomials', function(){ return view('Testinomials'); });

Route::get('FAQ', function(){ return view('FAQ'); });

Route::get('Destinations', function(){ return view('Destinations'); });

Route::get('Howtoorder', function(){ return view('Howtoorder'); });

Route::get('Feedback', function(){ return view('Feedback'); });

Route::get('Gifts', function(){ return view('Gifts'); });


Route::get('LoginPage', function(){ return view('Loginpage');});


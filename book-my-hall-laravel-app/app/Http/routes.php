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


Route::get('/', function () {
    return view('content.index');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/home', function () {
    return view('home');
});
Route::get('/members', function () {
    return view('members');
});

Route::get('/members/settings', function () {
	$hall= Session::get('hall');
	
    return view('members.settings',compact('hall'));
});

Route::get('/business', function () {
    return view('business');
});

Route::post('/addBusiness','MainController@addBusiness');

Route::get('/mail', 'MainController@mail');
Route::get('/verify/email/{id}', 'MainController@verify');
Route::post('/resend', 'MainController@resend');

Route::post('/members/login', 'MainController@memberLogin');
Route::patch('members/settings/{id}', 'MainController@updateHall');

Route::post('/members/settings/uploadimg','MainController@uploadImage');

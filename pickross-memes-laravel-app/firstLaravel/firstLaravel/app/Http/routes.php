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

Route::get('/', 'ContentController@index');

Route::get('/tag/{id}', 'ContentController@view');
Route::get('content/{id}', 'ContentController@content');
Route::get('fresh', 'ContentController@fresh');
Route::get('Polls', 'ContentController@polls');
Route::get('Memes', 'ContentController@memes');
Route::get('Faceoffs', 'ContentController@faceoffs');
Route::get('Articles', 'ContentController@articles');
Route::get('create', 'ContentController@create');
Route::post('create', 'ContentController@store');
Route::get('memeGenerator', 'ContentController@memeGenerator');
Route::post('memeGenerator', 'ContentController@store');
Route::get('mGenerator', 'ContentController@memeGeneratorMobile');
Route::post('mGenerator', 'ContentController@store');




//Ajax Calls
Route::get('fillNavbar', 'ContentController@fillNavbar');
Route::get('/navbarTags', 'ContentController@navbarTags');
Route::get('/updateTag', 'ContentController@updateTag');
Route::get('/updateMoreTag', 'ContentController@updateMoreTag');
Route::get('/deleteTag', 'ContentController@deleteTag');
Route::get('/addTag', 'ContentController@addTag');
Route::get('/deleteMoreTag', 'ContentController@deleteMoreTag');
Route::get('/addMoreTag', 'ContentController@addMoreTag');
Route::post('/page', 'ContentController@more');
Route::get('/like', 'ContentController@like');
Route::get('/comment', 'ContentController@comment');
Route::get('/sendcomment', 'ContentController@sendcomment');
Route::get('/report', 'ContentController@report');
Route::get('/viewCount', 'ContentController@viewCount');
//End
Route::post('/verifyEmail', 'Auth\AuthController@verifyEmail');
Route::post('/verifyRegEmail', 'Auth\AuthController@verifyRegEmail');
Route::post('/validateUser', 'Auth\AuthController@validateUser');
Route::post('/liveSearch', 'ContentController@liveSearch');


Route::get('adminPanel/userMaintenance', 'UserMaintController@index');
Route::get('adminPanel/userMaintenance/editUser/{id}', 'UserMaintController@editUser');
Route::patch('adminPanel/usertMaintenance/editUser/{id}', 'UserMaintController@updateUser');

Route::get('adminPanel/contentMaintenance', 'ContentMaintController@index');
Route::get('adminPanel/contentMaintenance/editContent/{id}', 'ContentMaintController@editContent');
Route::patch('adminPanel/contentMaintenance/editContent/{id}', 'ContentMaintController@updateContent');


Route::get('adminPanel/webUIMaintenance', 'WebUIMaintController@webUIMnt');
Route::post('adminPanel/webUIMaintenance/createTag', 'WebUIMaintController@createTag');
Route::get('adminPanel/webUIMaintenance/editTag/{id}', 'WebUIMaintController@editTag');
Route::patch('adminPanel/webUIMaintenance/editTag/{id}', 'WebUIMaintController@updateTag');
Route::delete('adminPanel/webUIMaintenance/editTag/{id}', 'WebUIMaintController@deleteTag');
Route::get('adminPanel/webUIMaintenance/fillNavbar', 'WebUIMaintController@fillNavbar');

Route::get('myprofile', 'UserProfileController@posts');
Route::get('myprofile/Posts', 'UserProfileController@posts');
Route::get('myprofile/Favourites', 'UserProfileController@fav');
Route::get('myprofile/Comments', 'UserProfileController@comments');
Route::post('/myprofile/upload','UserProfileController@avatarUpload');
Route::post('/profilePagination', 'UserProfileController@more');

//Route::get('myprofile/Posts', array('https','UserProfileController@posts'));

Route::get('welcome', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

Route::get('login/{provider?}', 'Auth\AuthController@sociallogin');


Route::get('login/twitter', 'Auth\AuthController@sociallogin');


Route::get('welcome', 'WelcomeController@index');


Route::get('/{id}', 'ContentController@content');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);












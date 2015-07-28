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

Route::Controllers(array(
    'auth' =>   'Auth\AuthController',
    'password' => 'Auth\PasswordController'
));
Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/addmember', function () {
    return view('add_member');
});
Route::get('register/organization', function () {
    return view('add_org');
});
Route::get('/forgotpassword', function(){
    return view('auth/password');
});
Route::get('account/verify', function(){
    return view('account_verify');
});
Route::get('account/verified', function(){
    return view('account_verified');
});
Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::get('/account/verify/{code}', 'Auth\AuthController@activateAccount');
Route::get('/rest/password/{token}' , 'Auth\PasswordController@getReset');
Route::get('/profile/{username}', ['middleware' => 'auth','uses' => 'ProfileController@getProfile']);
Route::post('/profile/update', ['middleware' => 'auth','uses' => 'ProfileController@updateProfile']);
Route::get('/create/organization', ['middleware' => 'auth','uses' => 'OrgController@index']);
Route::post('/create/organization', ['middleware' => 'auth','uses' => 'OrgController@store']);
Route::get('/organization/{id}', ['middleware' => 'auth','uses' => 'OrgController@getProfile']);
Route::post('/organization/update', ['middleware' => 'auth','uses' => 'OrgController@update']);
Route::post('/bleed/update', ['middleware' => 'auth','uses' => 'BleedController@update']);
Route::post('/delete/user', ['middleware' => 'auth','uses' => 'ProfileController@deleteUser']);
Route::post('/change/password', 'ProfileController@changePassword');
Route::get('/members', 'SearchController@getAllUsers');
//Route::get('/search', 'SearchController@getSearchData');
Route::post('/search', 'SearchController@getSearchData');

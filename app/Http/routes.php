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

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {

    Route::group(['prefix' => 'users'], function () {
        Route::any('/login', 'UserController@login');
        Route::post('/register', 'UserController@register');
        Route::any('/logout', 'UserController@logout');
        Route::any('/revoke', 'UserController@logout');
        Route::post('/refreshtoken', 'UserController@refresh');
        Route::group(['middleware' => 'jwt.auth'], function () {
            Route::get('/profile', 'UserController@getProfile');
            Route::put('/update', 'UserController@update');
            Route::get('/bleedhistory', 'UserController@bleedHistory');
            Route::put('/bleedhistory/{bleed_id}/update', 'UserController@updateBleed');
            Route::post('/bleedhistory/create', 'UserController@createBleed');
            Route::get('/deactivateaccount', 'UserController@deactivateAccount');
            Route::post('/activateaccount', 'UserController@activateAccount');
            Route::post('/changepassword', 'UserController@changePassword');
            Route::get('/getnotifications', 'UserController@getNotifications');
            Route::get('/forgotpassword', 'UserController@forgotPassword');
        });
    });

    Route::group(['prefix' => 'organizations', 'middleware' => 'jwt.auth'], function () {
        Route::get('/', 'OrgController@index');
        Route::post('/create', 'OrgController@store');
        Route::group(['prefix' => '{orgId}'], function () {
            Route::post('/join', 'OrgController@orgJoinRequest');
            Route::put('/update', 'OrgController@update');
            Route::post('/addmember', 'OrgController@addMember');
            Route::put('/updatemember/{uId}', 'OrgController@addMember');
            Route::post('/changeadmin', 'OrgController@changeAdmin');
            Route::delete('/deletemember/{id}', 'OrgController@deleteMember');
            Route::get('/requests', 'OrgController@getAllRequest');
            Route::get('/requests/{request_id}', 'OrgController@updateRequest');
//        Route::get('/request/reject/{id}', 'OrgController@rejectRequest');
//        Route::post('/delete', 'OrgController@delete');
        });
    });

    Route::get('/search', 'SearchController@getSearchData');

    Route::post('/reportuser', 'UserController@reportUser');
    Route::post('/currentlocation', 'UserController@currentLocation');

    Route::get('/getcountries', 'OtherController@getCountries');
    Route::get('/getcities', 'OtherController@getCities');
});

Route::Controllers(array('auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController'));
//Route::get('test', function () {
//    return view('tests');
//});
//Route::get('/bulkEmail','ContactUsController@bulkEmail');
/*Route::get('/bulkEmail', function () {
    return view('emails.bulkEmail');
});*/
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
Route::get('/account/activation', function () {
    return view('account_activation');
});
Route::post('/activate/account', 'ProfileController@activateAccount');
Route::get('account/verify', function () {
    return view('account_verify');
});
Route::get('account/verified', function () {
    return view('account_verified');
});
Route::get('about', function () {
    return view('about_us');
});
Route::get('FAQ', function () {
    return view('FAQ');
});
Route::get('contact', function () {
    return view('contact_us');
});
Route::post('/contact', 'ContactUsController@sendMail');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::get('/account/verify/{code}', 'Auth\AuthController@activateAccount');
Route::get('/forgotpassword', function () {
    return view('auth/password');
});
Route::get('/rest/password/{token}', 'Auth\PasswordController@getReset');
Route::post('/change/password', 'ProfileController@changePassword');
Route::get('/members', 'SearchController@getAllUsers');
Route::get('/search', 'SearchController@getSearchData');
Route::get('/organization/{id}', 'OrgController@getProfile');
Route::get('/helplines', 'HelplinesController@index');
Route::post('/helplines', 'HelplinesController@filterData');
Route::group(['middleware' => 'auth'], function () {
    Route::post('/organization/join', 'OrgRequestsController@store');
    Route::get('/organizations', 'OrgController@index');
    Route::get('/create/organization', 'OrgController@create');
    Route::post('/create/organization', 'OrgController@store');
    Route::post('/organization/update', 'OrgController@update');
    Route::post('/organization/addmember', 'OrgController@addMember');
    Route::post('/organization/change/admin', 'OrgController@changeAdmin');
    Route::get('/delete/user/{id}', 'OrgController@deleteMember');
    Route::get('/organization/request/accept/{id}', 'OrgController@acceptRequest');
    Route::get('/organization/request/reject/{id}', 'OrgController@rejectRequest');
    Route::post('/delete/organization', 'OrgController@delete');
    Route::get('/profile/{username}', 'ProfileController@getProfile');
    Route::post('/profile/update', 'ProfileController@updateProfile');
    Route::post('/bleed/update', 'BleedController@update');
    Route::post('/delete/user', 'ProfileController@deleteUser');
});
Route::get('/report/user', 'ReportsController@index');
Route::post('/report/user', 'ReportsController@reportUser');
Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin', 'before' => 'admin'], function () {
//    Route::get('/login', 'MainController@login');
//    Route::post('/login', 'MainController@login');

    //AutoComplete fetch data route
//    Route::get('getData', 'MainController@getData');

    Route::get('/', 'MainController@index');
    Route::get('/dashboard', 'MainController@index');

    //Users
    Route::resource('/user', 'UserController');
    Route::post('/user/filter', 'UserController@filter');
    Route::get('/user/{id}/destroy', 'UserController@destroy');
    Route::get('/change/user/status/{id}', 'UserController@changeStatus');
    Route::get('/deleted/user', 'UserController@getDeleted');
    Route::post('/deleted/user', 'UserController@filter');
    Route::get('/undo/delete/user/{id}', 'UserController@undoDelete');
    Route::get('/hard/delete/user/{id}', 'UserController@hardDelete');

    //Organizations
    Route::resource('/organization', 'OrgController');
    Route::post('/organization', 'OrgController@filter');
    Route::get('/organization/{id}/delete', 'OrgController@destroy');
    Route::get('/change/organization/status/{id}', 'OrgController@changeStatus');

    //Reports
    Route::get('/reports', 'ReportsController@getAll');
    Route::get('/delete/reported/user/{id}', 'ReportsController@deleteReportedUser');

    //Bleed
    Route::get('/user/{id}/bleed/history', 'BleedController@getAll');
    Route::get('/user/{user_id}/edit/bleed/{bleed_id}', 'BleedController@edit');
    Route::post('/user/edit/bleed', 'BleedController@update');
    Route::get('/add/user/{id}/bleed', 'BleedController@index');
    Route::post('/add/user/bleed', 'BleedController@add');
});
Route::get('/fblogin', function () {
    return Socialite::with('facebook')->redirect();
});
Route::get('/fbAuth', 'Auth\AuthController@fbLoginCallback');
Route::post('/fbAuth', 'Auth\AuthController@postFbLogin');
Route::get('/gplogin', function () {
    return Socialite::with('google')->redirect();
});
Route::get('/gpAuth', 'Auth\AuthController@gpLoginCallback');
Route::post('/gpAuth', 'Auth\AuthController@postGpLogin');
Route::get('/getCities/{country_id}', 'SearchController@getCities');
Route::get('/linkAccount/{type}', 'ProfileController@linkAccount');
Route::get('/unlinkAccount/{type}', 'ProfileController@unlinkAccount');
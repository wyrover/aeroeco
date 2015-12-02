<?php

Route::get('/',['as' => 'dashboard', 'uses' => 'DashboardController@index']);
Route::get('/home',['as' => 'home', 'uses' => 'DashboardController@index']);

// COMPANIES
Route::get('/newco', 'CompaniesController@newco');
Route::resource('companies', 'CompaniesController');

// PROJECTS
Route::resource('projects', 'ProjectsController');
//Route::get('/projects/create', ['as' => 'projects.create', 'uses' => 'ProjectsController@create']);

// TEST ROUTES
Route::get('/emailer', function() {
    $data = array('name' => 'Jonathan'); // Change name

    Mail::send('emails.welcome', $data, function($message)
    {
        // Please double-check email address
        $message->to('jongravois@gmail.com')
            ->subject('Hi, there! Laravel sent me!');
    });

    return 'Email Sent!';
});
Route::get('/welcome_page', function () {
    return view('pages.welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register/{tier}', 'Auth\AuthController@getRegister');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

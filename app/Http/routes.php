<?php

Route::get('/', function() {
    return 'Home Page';
});

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

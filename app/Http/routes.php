<?php

Route::get('/',['as' => 'dashboard', 'uses' => 'DashboardController@index']);
Route::get('/home',['as' => 'home', 'uses' => 'DashboardController@index']);

// USER INFO
Route::get('/messages', ['as' => 'my_messages', 'uses' => 'MessagesController@myMessages']);
Route::get('/profile', ['as' => 'profile', 'uses' => 'UsersController@profile']);
Route::get('/preferences', ['as' => 'preferences', 'uses' => 'UsersController@preferences']);

// COMPANIES
Route::get('/companies/newco', 'CompaniesController@newco');
Route::resource('companies', 'CompaniesController');

// PROJECTS
Route::resource('projects', 'ProjectsController');
Route::get('projects/{id}/gta', 'ProjectsController@contract_gta');
Route::post('project', ['as' => 'project_store', 'uses' => 'ProjectsController@store']);

// TEST ROUTES  Jon: 9012870209; Kenn: 8702083769; Tracy: 6624366086
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
Route::get('/event', function() {
    logit('created a test event');
});
Route::get('/tester', function () {
    return view('pages.tester');
});
Route::get('/notifier', function () {
    notify('2', '2', 'Angelina Jole just friended you.');
    return 'Notification Saved!';
});
Route::get('/sms', function() {
    Twilio::message('9012870209', 'Hi, I am Echo from the AeroEco software. I can now send but not receive text messages. Pretty cool, huh?');
    return 'Message sent';
});
Route::get('/messenger', function () {
    tweet('2', 'Dude, why are you sending yourself a message? Are you some kind of freak? Oh, you are just testing.');
    return 'Message Saved!';
});
Route::get('/welcome_page', function () {
    flash()->overlay('Hello, World!', 'This is the message');
    return view('pages.welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register/{tier}', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// API
Route::group(['prefix' => 'api/'], function () {
    Route::resource('addresses', 'AddressesController');
    Route::resource('aircrafts', 'AircraftsController');
    Route::resource('atas', 'AtasController');
    Route::resource('companycontacts', 'CompanyContactsController');
    Route::resource('companies', 'CompaniesController');
    Route::resource('contracttypes', 'ContracttypesController');
    Route::resource('countries', 'CountriesController');
    Route::resource('disassemblers', 'DisassemblersController');
    Route::resource('locations', 'LocationsController');
    Route::resource('notifications', 'NotificationsController');
    Route::resource('phones', 'PhonesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('projecttypes', 'ProjectTypesController');
    Route::resource('roles', 'RolesController');
    Route::resource('systemics', 'SystemicsController');
    Route::resource('users', 'UsersController');
});
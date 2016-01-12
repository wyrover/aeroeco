<?php

use App\Events\CompanyWasCreated;
use App\Models\Company;

Route::group(['middleware' => 'auth'], function ()
{
    // Restricted routes go here
    Route::get('/',[
        'as' => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
    Route::get('/home',[
        'as' => 'home',
        'uses' => 'DashboardController@index'
    ]);

    // USER INFO
    Route::get('/messages', [
        'as' => 'my_messages',
        'uses' => 'MessagesController@myMessages'
    ]);
    Route::get('/profile', [
        'as' => 'profile',
        'uses' => 'UsersController@profile'
    ]);
    Route::get('/preferences', [
        'as' => 'preferences',
        'uses' => 'UsersController@preferences'
    ]);

    // AUCTIONS
    Route::get('auctions', 'AuctionsController@listAll');
    Route::get('auctions/{id}', 'AuctionsController@listOne');

    // COMPANIES
    Route::get('companies', 'CompaniesController@listAll');
    Route::get('companies/{id}', 'CompaniesController@listOne');
    Route::get('companies/profile', 'CompaniesController@profile');
    Route::get('companies/{id}/profile', 'CompaniesController@profile');
    Route::get('companies/{id}/locations', 'CompaniesController@locations');
    Route::get('companies/{id}/contacts', 'CompaniesController@contacts');
    Route::get('companies/{id}/roles', 'CompaniesController@roles');
    Route::get('companies/{id}/users', 'CompaniesController@users');
    Route::get('companies/{id}/plugins', 'CompaniesController@plugins');
    Route::get('companies/{id}/messages', 'CompaniesController@messages');
    Route::get('companies/{id}/emails', 'CompaniesController@emails');
    Route::any('companies/store_profile', 'CompaniesController@storeProfile');
    Route::any('companies/store_locations', 'CompaniesController@storeLocations');
    Route::any('companies/store_contacts', 'CompaniesController@storeContacts');
    Route::any('companies/store_plugins', 'CompaniesController@storePlugins');
    Route::any('companies/store_roles', 'CompaniesController@storeRoles');
    Route::any('companies/store_users', 'CompaniesController@storeUsers');
    Route::any('companies/store_messages', 'CompaniesController@storeMessages');
    Route::any('companies/store_emails', 'CompaniesController@storeEmails');
    //Route::resource('companies', 'CompaniesController');

    // INSTRUCTIONS
    Route::get('instructions/custom_url', 'InstructionsController@customUrl');

    // MARKET
    Route::get('market', 'MarketplaceController@listAll');

    // PROJECTS
    Route::get('projects', 'ProjectsController@listAll');
    Route::get('projects/{id}', 'ProjectsController@listOne');
    Route::get('projects/profile', 'ProjectsController@profile');
    Route::get('projects/{id}/profile', 'ProjectsController@profile');
    Route::get('projects/{id}/aircraft', 'ProjectsController@aircraft');
    Route::get('projects/{id}/engines', 'ProjectsController@engines');
    Route::get('projects/{id}/inventory', 'ProjectsController@inventory');
    Route::get('projects/{id}/scope', 'ProjectsController@scope');
    Route::get('projects/{id}/uploads', 'ProjectsController@uploads');
    Route::get('projects/{id}/summary', 'ProjectsController@summary');
    Route::get('projects/{id}/gta', 'ProjectsController@contract_gta');
    Route::get('projects/{id}/parts', 'ProjectsController@contract_parts');
    Route::get('projects/{id}/delete', 'ProjectsController@delete');
    //Route::resource('projects', 'ProjectsController');
    Route::post('profile_update', [
        'as' => 'project_update',
        'uses' => 'ProjectsController@update_profile'
    ]);
    Route::post('aircraft_update', [
        'as' => 'aircraft_update',
        'uses' => 'ProjectsController@update_aircraft'
    ]);
    Route::post('engines_update', [
        'as' => 'engines_update',
        'uses' => 'ProjectsController@store_engines'
    ]);
    Route::post('upload_inventory', [
        'as' => 'upload_inventory',
        'uses' => 'ProjectsController@upload_inventory'
    ]);
    Route::post('parts_update', [
        'as' => 'parts_update',
        'uses' => 'ProjectsController@update_parts'
    ]);
    Route::post('uploads_update', [
        'as' => 'uploads_update',
        'uses' => 'ProjectsController@update_uploads'
    ]);
    Route::post('project_summary', [
        'as' => 'project_summary',
        'uses' => 'ProjectsController@store_summary'
    ]);

    // TECHS
    Route::get('teams', 'TechniciansController@listByTeam');
    Route::get('techs', 'TechniciansController@listAll');

    // WORKSCOPES
    Route::get('workscopes', 'WorkscopesController@listAll');
    Route::get('workscopes/{id}', 'WorkscopesController@listAll');
    Route::get('workscopes/{proj_id}/list', 'WorkscopesController@listByProject');

    // WORKTICKETS
    Route::get('worktickets', 'WorkticketsController@listAll');
    Route::get('worktickets/{id}', 'WorkticketsController@listOne');
    Route::get('worktickets/{proj_id}/list', 'WorkticketsController@listByProject');
});

// Unrestricted routes go here
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register/{tier}', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('register', 'AjaxController@trialRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::controllers([
    'password' => 'Auth\PasswordController',
]);

// TEST ROUTES  Jon: 9012870209; Kenn: 8702083769; Tracy: 6624366086
Route::group(['prefix' => 'test/'], function() {
    Route::get('upload', function() {
        return View::make('pages.upload');
    });
    Route::get('project/togglepart/{partid}', 'ProjectsController@togglePartInProject');
    Route::post('apply/upload', 'ApplyController@upload');
    Route::get('newco', function() {
        $newed = Company::create([
            'company' => 'Apple Computers',
            'dba' => 'Apple',
            'corporation_type' => 'California',
            'country_id' => 184,
            'location_id' => 1,
            'main_phone' => '7129991200',
            'domain' => 'apple.com',
            'mail_domain' => 'apple.com',
            'folder_name' => 'apple_computers',
            'website' => 'http://www.apple.com'
        ]);
        event(new CompanyWasCreated($newed));
    });
    Route::get('emailer', function() {
        $data = array('name' => 'Jonathan'); // Change name

        Mail::send('emails.welcome', $data, function($message)
        {
            // Please double-check email address
            $message->to('jongravois@gmail.com')
                ->subject('Hi, there! Laravel sent me!');
        });

        return 'Email Sent!';
    });
    Route::get('xlimport/{dir}/{file}', [
        'as' => 'xlimport',
        'uses' => 'ExcelController@fromExcel'
    ]);
    Route::get('event', function() {
        logit('created a test event');
    });
    Route::get('tester', function () {
        return view('pages.tester');
    });
    Route::get('notifier', function () {
        notify(Auth::user()->id, '2', 'Angelina Jole just friended you.');
        return 'Notification Saved!';
    });
    Route::get('sms/{phone}', function($phone) {
        Twilio::message($phone, 'Hi, I am Echo from the AeroEco software. I can now send but not receive text messages. Pretty cool, huh?');
        return 'Message sent';
    });
    Route::get('messenger', function () {
        tweet('2', 'Dude, why are you sending yourself a message? Are you some kind of freak? Oh, you are just testing.');
        return 'Message Saved!';
    });
    Route::get('systemic', function() {
        $user = Auth::user();
        Activity::log([
            'contentId'   => null,
            'contentType' => 'User',
            'action'      => 'LogIn',
            'description' => 'Logged In',
            'details'     => 'Username: '.$user->fullname,
            'updated'     => (bool) $user->id,
        ]);
        return 'Activity logged';
    });
    Route::get('welcome_page', function () {
        flash()->overlay('Hello, World!', 'This is the message');
        return view('pages.welcome');
    });
});

// API
Route::group(['prefix' => 'api/'], function () {
    Route::get('aircrafts/list', 'AircraftsController@typelist');
    Route::get('companies/{id}/locationslist', 'CompaniesController@listLocations');
    Route::get('project/{id}/apulist', 'ProjectEnginesController@apuByProject');
    Route::get('project/{id}/bundleslist', 'BundlesController@index');
    Route::get('project/{id}/enginelist', 'ProjectEnginesController@listByProject');
    Route::get('project/{id}/atalist', 'ProjectsController@ataList');
    Route::get('project/{id}/partslist', 'ProjectsController@partsList');
    Route::get('project/{id}/scopeslist', 'ProjectsController@scopesList');
    Route::any('project/togglepart/{partID}', 'ProjectsController@togglePartInProject');
    Route::any('project/togglemsn', 'ProjectsController@togglemsn');
    Route::any('project/{projectID}/package/{packageID}', 'ProjectsController@applyPackage');
    Route::get('projects/user/{id}/projectslist', 'ProjectsController@listByUser');

    Route::get('globals', 'AjaxController@fetchGlobals');

    Route::resource('addresses', 'AddressesController');
    Route::resource('aircrafts', 'AircraftsController');
    Route::resource('atas', 'AtasController');
    Route::resource('auctions', 'AuctionsController');
    Route::resource('companycontacts', 'CompanyContactsController');
    Route::resource('companies', 'CompaniesController');
    Route::resource('contracttypes', 'ContracttypesController');
    Route::resource('countries', 'CountriesController');
    Route::resource('disassemblers', 'DisassemblersController');
    Route::resource('locations', 'LocationsController');
    Route::resource('messages', 'MessagesController');
    Route::resource('notifications', 'NotificationsController');
    Route::resource('phones', 'PhonesController');
    Route::resource('projects', 'ProjectsController');
    Route::resource('projecttypes', 'ProjectTypesController');
    Route::resource('roles', 'RolesController');
    Route::resource('systemics', 'SystemicsController');
    Route::resource('teams', 'TeamsController');
    Route::resource('techs', 'TechsController');
    Route::resource('users', 'UsersController');
});

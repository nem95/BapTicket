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

Route::group(['middleware' => ['web']], function () {

    //Route::auth();
    Route::get('/login', 'AuthController@showLogin');
    Route::post('/login', 'AuthController@login');
    Route::get('/logout', 'AuthController@logout');
    Route::get('/register', 'AuthController@showRegister');
    Route::post('/register', 'AuthController@register');
    
    Route::get('/', 'EventController@index');

    Route::resource('/event', 'EventController');

    Route::resource('/orga', 'OrgaController');
    Route::resource('/admin', 'AdminController');

    /* Route Google Map */

    Route::post('events.store',function()
    {
        $data = [];
        $data['adresse'] = Input::get('adresse');
        return View::make('events.store', $data);
    });

    
});
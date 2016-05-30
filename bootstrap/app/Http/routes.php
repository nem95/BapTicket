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

    Route::resource('/evenement', 'EventController');

    Route::resource('/organisateur', 'OrgaController');
    Route::post('/organisateur', 'OrgaController@addTags');
    //Route::delete('/orga/{id}', ['as' => 'orga.deleteTags', 'uses' => 'OrgaController@deleteTags']);

    Route::resource('/admin', 'AdminController');
    Route::resource('/resa', 'ResaController');
    Route::post('/resa', 'ResaController@reservation');

    Route::resource('/contact', 'ContactController');

    /* Route pages autres */

    Route::get('/mentions', function()
    {
        return view('other.mentions');
    });

    Route::get('/qui', function()
    {
        return view('other.qui');
    });

    Route::get('/cgu', function()
    {
        return view('other.cgu');
    });   

    Route::get('/faq', function()
    {
        return view('other.faq');
    });   

    Route::get('/plan', function()
    {
        return view('other.plan');
    });   

    Route::get('/contact', function()
    {
        return view('other.contact');
    });   

    Route::get('/services', function()
    {
        return view('other.services');
    });

    /* Route dev à enlever */

    Route::get('/billet', function()
    {
        return view('pdf.billet');
    });

});
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
    return view('accueil');
});

//Routes pour la connexion utilisateur
Route::get('/getLogin', 'VisiteurController@getLogin');
Route::post('/login', 'VisiteurController@connect');
Route::get('/getLogout', 'VisiteurController@signOut');

Route::get('/getMedicaments', 'MedicamentController@getListeMedicament');
Route::get('/getListeInteraction/{idM}', 'MedicamentController@getListeInteraction');
Route::get('/getFormInteraction/{idA}/{idB}', 'MedicamentController@getFormInteraction');
<?php

use App\Http\Controllers\DBcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// go to form to add esocial
Route::get('/addesocial', function () {
    return view('esociale.addesocial');
});

Route::controller(DBcontroller::class)->group(function () {

    // 1- esocial:

    // read esocial
    Route::get('/esocial', 'esocial');

    // delete esociale
    Route::get('/deleteES/{id}', 'deleteES');

    // confirm delete
    Route::get('/confdeleteEsocial/{id}', 'confdeleteEsocial');

    // modify esociale - go to form
    Route::get('/modifyesocial/{id}', 'modifyesocial');

    // update esociale in database with new values and redirect to home
    Route::post('/modifyesocialindb', 'modifyesocialindb');

    // add esociale in database and redirect to home
    Route::post('/addestodb', 'addestodb');

    // -----------------------------------------

    // 2- ephysique:

    // go to form to add ephysique
    Route::get('/addephysique', 'addephysique');

    // read ephysique
    Route::get('/ephysique', 'ephysique');

    // delete ephysique
    Route::get('/deleteep/{id}', 'deleteep');

    // confirm delete
    Route::get('/confdeleteephysique/{id}', 'confdeleteephysique');

    // modify ephysique - go to form
    Route::get('/modifyephysique/{id}', 'modifyephysique');

    // update ephysique in database with new values and redirect to home
    Route::post('/modifyephysiqueindb', 'modifyephysiqueindb');

    // add ephysique in database and redirect to home
    Route::post('/addeptodb', 'addeptodb');

    // details d'ep
    Route::get('/detailsep/{id}', 'detailsep');

    // meme contrat avec 2 version <> et meme status
    Route::get('/contraterror', 'contraterror');

    // meme contrat avec 2 version <> et meme status
    Route::get('/deletePreviouscontrat', 'deletePreviouscontrat');

    // prepaid client sans remise dans l'une des article de leur contrat.
    Route::get('/preClientRemise', 'preClientRemise');

    // ajouter 10 % de remise pour ces client
    Route::post('/addremise', 'addremise');
    
});

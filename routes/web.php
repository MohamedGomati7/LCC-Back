<?php

use Illuminate\Support\Facades\Route;

// Route Index 

Route::get('/','indexController@index');
Route::post('//send','indexController@send')->name('sendMessage');


// Route Index EN

Route::get('/en','enController@en');



// Route::get('/', function () {
//     return view('welcome');
// });

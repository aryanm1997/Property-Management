<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionsController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/regions', 'App\Http\Controllers\RegionsController@index');

Route::resource('regions', RegionsController::class);
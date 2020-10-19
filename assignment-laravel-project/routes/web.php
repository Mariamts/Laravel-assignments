<?php

use Illuminate\Support\Facades\Route;


Route::get('/main', '\App\Http\Controllers\PageController@getlayout');
Route::get('/naruto', '\App\Http\Controllers\PageController@getNaruto');
Route::get('/sasuke', '\App\Http\Controllers\PageController@getSasuke');
Route::get('/sakura', '\App\Http\Controllers\PageController@getSakura');

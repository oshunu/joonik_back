<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'App\Http\Controllers\Api',
    'middleware' => ['auth_api_key'],
], function () {
    Route::get('/locations', "LocationController@index");    
});





<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EQ2Controller;

#Route::get('/user', function (Request $request) {
#    return $request->user();
#})->middleware('auth:sanctum');

Route::get('/eq2/worlds', [EQ2Controller::class, 'getWorlds']);

<?php

use App\Http\Controllers\Api\MapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/game', [MapController::class, 'getAllTeams']);



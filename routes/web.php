<?php

use App\Http\Controllers\Api\MapController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MapController::class, 'getAllTeams']);



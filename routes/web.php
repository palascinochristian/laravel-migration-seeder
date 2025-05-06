<?php

use App\Http\Controllers\TrainsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainsController::class, 'GetTrains']);

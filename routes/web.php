<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome_new');
//});

Route::get('/', [UserController::class, 'index']);

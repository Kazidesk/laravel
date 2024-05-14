<?php

use App\Http\Controllers\soicontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/register",[soicontroller:: class, "/register"]);
Route::post("/login",[soicontroller:: class, "/login"])

<?php

use App\Http\Controllers\Postcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route:: middleware('auth:sanctum')->group(function () {
    Route::get('/post',[Postcontroller:: class, 'index']);
    Route::post('/post',[Postcontroller::class,'createpost']);
    
});
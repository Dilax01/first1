<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('/t', function () {
    // return view('welcome');
    return "poda";
});
Route::get ('/', [Postcontroller::class,'index']);

Route::get ('/A', [Postcontroller::class,'detail']);
<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;

use function Psy\bin;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contacts', function () { return view('contacts'); });


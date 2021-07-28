<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todocontroller;

Route::resource('todo', 'todocontroller');
Route::resource('create', 'todocontroller');

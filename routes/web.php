<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('photo', PhotoController::class)

    ->only(['index',  'create', 'store', 'show', 'edit', 'update', 'destroy']);

    

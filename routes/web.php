<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/album', [FirstController::class, 'album'])->name('album');
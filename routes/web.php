<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Per fare a meno di Home e prendere un layout
layouts.app
*/

Route::get('/', function () {
    $comics = config ('comics');
    return view('layouts.app', compact('comics'));
})->name('home');

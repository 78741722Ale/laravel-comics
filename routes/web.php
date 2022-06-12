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
    /* Fumetti Completi */
    $fumetti = config('comics.fumetti');
    $icons = config('db.icons');
    $apps = config('db.apps');
    $dc_comics_list = config('db.footer_list.dc_comics_list');
    $dc_comics_shop = config('db.footer_list.dc_shop');
    $dc_termini = config('db.footer_list.dc_termini');
    $dc_sites = config('db.footer_list.dc_sites');
    $nav_links = config('db.navbar_list');
    /* dd($nav_links); */
    /* dd($icons); */
    /* Icone del Footer */
    return view('layouts.app', compact('fumetti', 'icons', 'apps', 'dc_comics_list', 'dc_comics_shop', 'dc_termini', 'dc_sites', 'nav_links'));
})->name('app');

/* Rotta di prova (shop) */
Route::get('/shop', function () {
    return abort(404);
})->name('shop');







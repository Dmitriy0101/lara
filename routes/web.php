<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/catalog_filter', function () {
    return view('catalog_filter');
});
Route::get('/card-item', function () {
    return view('card');
});
Route::post('/search', function () {
    return view('modules.search-result');
});

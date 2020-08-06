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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/items', function () {
    return view('items.index');
});

Route::get('/items/create', function () {
    return view('items.create');
});
*/



Route::get('/', function () {
    return view('items.table');
});

Route::get('/data-tables', function () {
    return view('items.data-table');
});
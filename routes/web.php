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
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/ola', function () {
    return view('welcomename', ['name' => 'Carmo']);
});

Route::get('/contacto1', function () {
    return view('contactoform');
});

Route::get('/contacto2', function () {
    return view('contacto.form');
});





/*
Route::get('/news', function () {
    return "Sítio de Notícias";
});


Route::get('/contacto', function () {
    return "Sítio de Contacto";
}); */ 

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
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('/proyectos', function () {
    return view('proyectos');
});



Route::get('/pelota', function () {
    return view('proyectos',['rev_pelota'=>'true']);
});


Route::get('/nutricion', function () {
    return view('proyectos',['nutricion'=>'true']);
});



Route::get('/educacion', function () {
    return view('proyectos',['educacion'=>'true']);
});


Route::get('/arte', function () {
    return view('proyectos',['arte'=>'true']);
});


Route::get('/formulario', function () {
    return view('formulario');
});
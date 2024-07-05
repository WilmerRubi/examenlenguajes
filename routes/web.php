<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('directorio');
});
Route::get('/agregar', function () {
    return view('agregarcontacto');
});
Route::get('/buscar', function () {
    return view('buscar');
});
Route::get('/entrada', function () {
    return view('crearEntrada');
});
Route::get('/eliminar', function () {
    return view('eliminar');
});
Route::get('/ ver', function () {
    return view('vercontactos');
});


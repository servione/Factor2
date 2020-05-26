<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// rutas de utilidades

Route::get('/recibovalores', 'utilidades@recibovalores')->name('recibo_valores');

Route::get('/simulador', 'utilidades@simulador')->name('simulador');

Route::get('/controlIncidentes', 'utilidades@incidentes')->name('incidentes');

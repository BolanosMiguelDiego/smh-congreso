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

/** Ruta pagina principal*/
Route::get('/', function () {
    return view('principal');
});
/*********************************************************************** */
/********************nosotros******************************************* */
/************************************************************************ */
/**Ruta Mision Vision y objetivo */
Route::get('/mvo', function () {
    return view('nosotros/mvo');
});
/** Ruta Introduccion */
Route::get('/introduccion', function () {
    return view('nosotros/introduccion');
});
/**Ruta contacto */
Route::get('/contacto', function () {
    return view('nosotros/contacto');
});
/**ruta comite diractivo */
Route::get('/comite', function () {
    return view('nosotros/comite');
});
/*************************************************************************** */
/***************************informacion************************************** */
/**************************************************************************** */
/**ruta  costos*/
Route::get('/costos', function () {
    return view('informacion/costos');
});
/***ruta de hoteles */
Route::get('/hoteles', function () {
    return view('informacion/hoteles');
});
/****ruta de patrocinadores */
Route::get('/patrocinadores', function () {
    return view('informacion/patrocinadores');
});
/**Noticias y eventos */
Route::get('/noticias', function () {
    return view('informacion/noticias');
});
/**************************************************************************** */
/************************eventos********************************************* */
/**************************************************************************** */
/**actividades */
Route::get('/actividades', function () {
    return view('eventos/actividades');
});
/**cursos */
Route::get('/cursos', function () {
    return view('eventos/cursos');
});
/**ponencias */
Route::get('/ponencias', function () {
    return view('eventos/ponencias');
});
/***talleres */
Route::get('/talleres', function () {
    return view('eventos/talleres');
});
/**************************************************************************** */
/************************congreso********************************************* */
/**************************************************************************** */
/** Memorias*/
Route::get('/memorias', function () {
    return view('congresos/memorias');
});
/** Congresos anteriores */
Route::get('/congresos_anteriores', function () {
    return view('congresos/congresos_anteriores');
});
/** Minutas */
Route::get('/minutas', function () {
    return view('congresos/minutas');
});
/**  Biografias*/
Route::get('/biografia', function () {
    return view('congresos/biografia');
});



<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Impresion de PDF */

Route::get('/imprimirCarga','App\Http\Controllers\crearpdfController@carga'); 
Route::get('/imprimirVacio','App\Http\Controllers\crearpdfController@vacio');  

/* Envio de Emails */

Route::get('/mailPrueba','App\Http\Controllers\emailController@prueba');  

Route::post('/imprimir/create','App\Http\Controllers\crearpdfControllerPDF@store'); //mostrar todos
Route::get('/imprimirIns','App\Http\Controllers\imprimirPDF@store'); //mostrar todos
Route::put('/imprimir/{id}','App\Http\Controllers\imprimirPDF@update');//actualizar
Route::delete('/imprimir','App\Http\Controllers\imprimirPDF@destroy'); // eliminar

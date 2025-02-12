<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Route::get('/bem-vindo', function (){

    return "<h1 style='background-color: pink; position: absolute; top: 40%; left: 40%'>Seja bem vindo!</h1>";

});

Route::get('/exercicios', function (){

    return view('layout');

});

Route::get('/exer1', function (){

    return view('exer1');

});

Route::post('/exer1Resp', function (Request $resquest){

    $valor1 = intval($resquest->input('valor1'));
    $valor2 = intval($resquest->input('valor2'));

    $soma = $valor1 + $valor2;

    return view('exer1', compact('soma'));

});
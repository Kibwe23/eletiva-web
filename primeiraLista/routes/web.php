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

Route::get('/exer2', function (){

    return view('exer2');

});

Route::get('/exer3', function (){

    return view('exer3');

});

Route::get('/exer4', function (){

    return view('exer4');

});

Route::get('/exer5', function (){

    return view('exer5');

});

Route::get('/exer6', function (){

    return view('exer6');

});

Route::get('/exer7', function (){

    return view('exer7');

});

Route::get('/exer8', function (){

    return view('exer8');

});

Route::get('/exer9', function (){

    return view('exer9');

});

Route::get('/exer10', function (){

    return view('exer10');

});

Route::post('/exer1Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));
    $valor2 = floatval($resquest->input('valor2'));
    $valor3 = floatval($resquest->input('valor3'));

    $soma = $valor1 + $valor2 + $valor3;

    $media = number_format(($soma / 3), 2, ',', '.');

    return view('exer1', compact('media'));

});

Route::post('/exer2Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $valorConvertido = number_format((($valor1 * 1.8) + 32), 1);

    return view('exer2', compact('valorConvertido'));

});

Route::post('/exer3Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $valorConvertido =  number_format(((5/9) * ($valor1 - 32)), 1);

    return view('exer3', compact('valorConvertido'));

});

Route::post('/exer4Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));
    
    $valor2 = floatval($resquest->input('valor2'));

    $areaRetangulo = $valor1 * $valor2;

    return view('exer4', compact('areaRetangulo'));

});

Route::post('/exer5Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $areaCirculo = number_format((pi() * ($valor1 **2)), 2);

    return view('exer5', compact('areaCirculo'));

});

Route::post('/exer6Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));
    
    $valor2 = floatval($resquest->input('valor2'));

    $perimetroRetangulo = (2 * $valor1) + (2 * $valor2);

    return view('exer6', compact('perimetroRetangulo'));

});

Route::post('/exer7Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $perimetroCirculo = number_format(( (2 * pi()) * $valor1), 2);

    return view('exer7', compact('perimetroCirculo'));

});

Route::post('/exer8Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));
    
    $valor2 = floatval($resquest->input('valor2'));

    $resultado = $valor1 ** $valor2;

    return view('exer8', compact('resultado'));

});

Route::post('/exer9Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $centimetros = $valor1 * 100;

    return view('exer9', compact('centimetros'));

});

Route::post('/exer10Resp', function (Request $resquest){

    $valor1 = floatval($resquest->input('valor1'));

    $milhas = $valor1 * 0.621371;

    return view('exer10', compact('milhas'));

});

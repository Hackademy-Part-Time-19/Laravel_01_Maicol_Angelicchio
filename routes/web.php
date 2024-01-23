<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    $titolo='TITOLO HOME PASSATO DA VARIABILE';
    return view('home', ["titolo"=>$titolo]);
});
Route::get('/articoli', function () {
    return view('articoli');
});
Route::get('/chiSono', function () {
    $descrizione = "Ciao mi chiamo Maicol e vengo da Modena(descrizione passata da variabile)";
    return view('chiSono', ["descrizione"=>$descrizione]);
});

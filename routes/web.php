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

Route::get('/', function () {
    return view('welcome');
});


Route::get('productos', function () {
    return 'Pagina proghfgducto';
});

Route::get('productos/create', function () {
    return "Esta es la pagina de creacion de productos";
});

Route::get('productos/{id}', function ($id) {
    return "Pagina del producto # $id";
});
Route::get('productos/{id}/{categoria}', function ($id, $categoria) {
    return "Pagina del producto # $id con la categoria $categoria";
});
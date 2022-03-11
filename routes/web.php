<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/ControleDeProdutos', 'App\Http\Controllers\ControllerAplication@registro' );
Route::get('/New', 'App\Http\Controllers\ControllerAplication@new' );
Route::get('/Categoria', 'App\Http\Controllers\ControllerAplication@categoria' );
Route::get('/Marca', 'App\Http\Controllers\ControllerAplication@marca' );
Route::get('/cadastroSucess', 'App\Http\Controllers\ControllerAplication@cadastroSucess' );
Route::get('/sucessMarca', 'App\Http\Controllers\ControllerAplication@sucessMarca' );
Route::get('/sucessCategoria', 'App\Http\Controllers\ControllerAplication@sucessCategoria' );
Route::get('/cadastro', 'App\Http\Controllers\ControllerAplication@cadastro' );
Route::get('/login', 'App\Http\Controllers\ControllerAplication@login' );
Route::get('/sucessCadastroUsuario', 'App\Http\Controllers\ControllerAplication@sucessCadastroUsuario' );
Route::get('/bemvindo', 'App\Http\Controllers\ControllerAplication@bemvindo' );
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Alimentos;

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', function() {
    return view('home.home');
})->name('home');

Route::get('listar_alimentos', function() {
    return view('alimentos.listar_alimentos');
})->name('listar_alimentos');


Route::get('cadastrar_alimentos', function() {
    return view('alimentos.cadastrar_alimentos');
})->name('cadastrar_alimentos');

Route::get('editar_alimentos/{id}', function($id) {
    $alimento = Alimentos::find($id);
    return view('alimentos.editar_alimentos');
})->name('editar_alimentos');
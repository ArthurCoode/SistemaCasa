<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentosController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('criarAlimento',[AlimentosController::class, 'criarAlimento'])->name('criarAlimento ');
Route::get('listarAlimentos',[AlimentosController::class, 'listarAlimentos'])->name('listarAlimento');
Route::post('atualizarAlimento',[AlimentosController::class, 'atualizarAlimento'])->name('atualizarAlimento');
Route::delete('deletarAlimento',[AlimentosController::class, 'deletarAlimento'])->name('deletarAlimento');
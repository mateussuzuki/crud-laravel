<?php

Route::get('/carro', [App\Http\Controllers\CarroController::class, 'index']);
Route::get('/carro/visualizar/{id}', [App\Http\Controllers\CarroController::class, 'show']);
Route::get('/carro/cadastrar', [App\Http\Controllers\CarroController::class, 'create']);
Route::post('/carro/cadastrar', [App\Http\Controllers\CarroController::class, 'store']);
Route::get('/carro/editar/{id}', [App\Http\Controllers\CarroController::class, 'edit']);
Route::post('/carro/editar/{id}', [App\Http\Controllers\CarroController::class, 'update']);
Route::get('/carro/deletar/{id}',[App\Http\Controllers\CarroController::class, 'delete']);
Route::post('/carro/deletar/{id}',[App\Http\Controllers\CarroController::class, 'destroy']);





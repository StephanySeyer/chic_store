<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marca/crear',[MarcaController::class,'create']);

Route::get('/marca/crear',[MarcaController::class,'create']);
Route::get('/marca/{marca}',[MarcaController::class,'show']);
Route::post('/marca',[MarcaController::class,'store']);
Route::get('/marca/{marca}/editar',[MarcaController::class,'edit']);
Route::put('/marca/{marca}',[MarcaController::class,'update']);
Route::delete('/marca/{user}',[MarcaController::class,'destroy']);


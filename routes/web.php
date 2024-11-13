<?php

use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marca/crear',[MarcaController::class,'create']);
Route::get('/marca/{marca}',[MarcaController::class,'show']);
Route::post('/marca',[MarcaController::class,'store']);
Route::get('/marca/{marca}/editar',[MarcaController::class,'edit']);
Route::put('/marca/{marca}',[MarcaController::class,'update']);
Route::delete('/marca/{user}',[MarcaController::class,'destroy']);

Route::get('/product/create', [ProductoController::class, 'create'])->name('product.create');
Route::post('/product/create', [ProductoController::class, 'store'])->name('product.store');
Route::get('/product', [ProductoController::class, 'index'])->name('product.index');
Route::get('/product/update/{id}', [ProductoController::class, 'edit'])->name('product.update');
Route::put('/product/update/{id}', [ProductoController::class, 'update'])->name('product.update.data');
Route::delete('/product/delete/{id}', [ProductoController::class, 'destroy'])->name('product.destroy');

Route::get('/user/create', [UsuarioController::class, 'create'])->name('user.create');
Route::post('/user/create', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/user', [UsuarioController::class, 'index'])->name('user.index');
Route::get('/user/update/{id}', [UsuarioController::class, 'edit'])->name('user.update');
Route::put('/user/update/{id}', [UsuarioController::class, 'update'])->name('user.update.data');
Route::delete('/user/delete/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy');
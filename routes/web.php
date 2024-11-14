<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\isAuthenticated;
use App\Models\Marca;
use Illuminate\Database\Connectors\MariaDbConnector;
use Illuminate\Support\Facades\Route;



//login 

Route::get('/registro', [AuthController::class, 'showRegisterForm'])->name('register');

Route::post('/registro', [AuthController::class, 'register'])->name('registro.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');



Route::middleware([isAuthenticated::class])->group(function (){



Route::get('/', function () {
    return view('welcome');
});




Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para la página de inicio (home)
Route::get('/home', function () {
    return view('home'); 
})->name('home')->middleware('auth');  // Usamos el middleware 'auth' para asegurarnos de que solo los usuarios autenticados accedan


//middleware

//rutas de marca falta por editar 

Route::get('/marca/create', [MarcaController::class, 'create'])->name('marca.create');
Route::post('/marca/create', [MarcaController::class, 'store'])->name('marca.store');
Route::get('/marca', [MarcaController::class, 'index'])->name('marca.index');
Route::get('/marca/update/{id}', [MarcaController::class, 'edit'])->name('marca.update');
Route::put('/marca/update/{id}', [MarcaController::class, 'update'])->name('marca.update.data');
Route::delete('/marca/delete/{id}', [MarcaController::class, 'destroy'])->name('marca.destroy');





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

});

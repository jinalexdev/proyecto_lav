<?php

use Illuminate\Support\Facades\Route;
 // archivos de rutas 
Route::get('/', function () {
   
    return view('welcome');
});

Route::get('/usuarios', function () {
    return "hola esto es una prueba";
    
});
Route::get('usuarios/create', function () {
    return "en esta pagina podras crear un curso";
    
});
Route::get('usuarios/{usuario}', function ($usuario) {
    return "bienvenido usuario : $usuario";
    
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

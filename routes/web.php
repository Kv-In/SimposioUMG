<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('/table-productos', App\Http\Controllers\TableProductoController::class);

Route::get('/Expositores', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Expositores');
});

Route::get('/Informacion', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/info');
});

Route::get('/Organizadores', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Team');
});

Route::get('/Souvenir', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/productos');
});

Route::get('/Carito', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/carito');
});
Route::get('/Verificacion', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/verifi_');
});

Route::get('/Login', function () {
    /**en el return defino la ruta donde esta el  */
    return view('auth/login');
});

Route::get('/Registro', function () {
    /**en el return defino la ruta donde esta el  */
    return view('auth/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\viewconvinacionController::class, 'showData']);

Route::get('/Souvenir', [App\Http\Controllers\viewprodController::class, 'indexSouv']);

Route::resource('/table-productos', App\Http\Controllers\TableProductoController::class);
Route::resource('/table-organizadores', App\Http\Controllers\TableOrganizadoreController::class);
Route::resource('/table-expositores', App\Http\Controllers\TableExpositoreController::class);

Route::get('/Expositores', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Expositores');
});

Route::get('/Informacion', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Info');
});

Route::get('/Organizadores', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Team');
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




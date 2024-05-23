<?php

use App\Http\Controllers\TableProductoController;
use App\Http\Controllers\TableOrganizadoreController;
use App\Http\Controllers\TableExpositoreController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;


Route::get('/', [App\Http\Controllers\viewconvinacionController::class, 'showData'])->name('home');
Route::get('/Souvenir', [App\Http\Controllers\viewprodController::class, 'indexProducto']);

Route::resource('/table-productos', TableProductoController::class);
Route::resource('/table-organizadores', TableOrganizadoreController::class);
Route::resource('/table-expositores', TableExpositoreController::class);
Route::resource('roles', RolesController::class)->middleware('can:admin.home')->middleware('can:admin.home');

Route::resource('user', UserController::class)->only(['index','edit','update'])->middleware('can:admin.home');



Route::get('/Expositores', function () {
    /**en el return defino la ruta donde esta el  */
    return view('layouts/Expositores');
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', ])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


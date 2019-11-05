<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::Resource('alcaldia','AlcaldiaController');
Route::Resource('anticipo','AnticiposController');
Route::Resource('proveedores','ProveedoresController');
Route::Resource('reporte','Reporte1Controller');
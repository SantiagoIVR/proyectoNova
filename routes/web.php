<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\proveedorcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('registraproveedor',[proveedorcontroller::class,'registraproveedor'])->name('registraproveedor');
Route::POST('guardaproveedor',[proveedorcontroller::class,'guardaproveedor'])->name('guardaproveedor');
Route::get('reporteproveedor',[proveedorcontroller::class,'reporteproveedor'])->name('reporteproveedor');
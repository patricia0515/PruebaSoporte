<?php

use Illuminate\Support\Facades\Route;
/* Debemos esportar todos los controladores que necesitemos en las rutas */
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\PersonaController;
use App\Http\Controllers\MyController;

// Ya desde RouteService le dimos el prefijo admin, por lo que no es necesario ponerlo en las rutas.
//Adicional le estamos pasando el controlador y como segundo parametro el metodo index
Route::get('', [HomeController::class, 'index'])->name('admin.home');

// Vamos a crear una ruta de tipo Resource para el manejo de la CRUD Áreas
// Pero inicialmente hay que asegurarnos que el controlador exista
Route::resource('areas', AreaController::class)->names('admin.areas');


// Vamos a crear una ruta de tipo Resource para el manejo de la CRUD Personas
// Pero inicialmente hay que asegurarnos que el controlador exista
Route::resource('personas', PersonaController::class)->names('admin.personas');

// Estas son las rutas para importar y exporta vista a la base de datos usuarios EXCEL
Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');

Route::get('importExportView1', [MyController::class, 'importExportView1']);
Route::get('exportAreas', [MyController::class, 'exportAreas'])->name('exportAreas');
Route::post('importAreas', [MyController::class, 'importAreas'])->name('importAreas');

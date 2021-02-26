<?php

use Illuminate\Support\Facades\Route;
/* Debemos esportar todos los controladores que necesitemos en las rutas */
// use App\Http\Controllers\AreaController;
use App\Http\Controllers\UserController;

// Por medio de esta ruta le estoy dando ingreso al usuario para que visualice sus datos personales
Route::resource('/area', AreaController::class);

//Le estamos pasando el controlador de usuarios y como segundo parametro el metodo indexu que me retorna a la vista
// user index 
Route::get('/', [UserController::class, 'indexu'])->name('user.index');

/* El siguiente middleware esta validando si el usuario esta autenticado, si no es asi
lo redirecciona a la vista login para que se autentique, si por el contrario el usuario
existe en la base de datos lo llevara al tablero de control  */
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

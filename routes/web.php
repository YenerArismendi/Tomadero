<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cuentasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\MesasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('cuentas', [cuentasController::class, 'index'])->name('cuentas.index');
    Route::resource('productos', ProductosController::class);
    Route::resource('gastos', GastosController::class);
    //Ruta para guardar el pago del arriendo
    Route::post('pagoArriendo', [GastosController::class, 'storeArriendo'])->name('pagoArriendo');
    //Ruta para guardar el pago del personal
    Route::post('PagoPersonal', [GastosController::class, 'storePersonal'])->name('pagoPersonal');
    //Ruta para almacenar el pago de los servicios
    Route::post('pagoServicios', [GastosController::class, 'storeServicios'])->name('pagoServicios');
    Route::resource('mesas', MesasController::class);

    Route::resource('personal', PersonalController::class);
    Route::resource('ventas', VentasController::class);

});



require __DIR__.'/auth.php';

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ventas', [VentaController::class,'index']);

Route::post('/ventas', [VentaController::class, 'store']);

// Ruta para mostrar una venta específica
Route::get('/ventas/{venta}', [VentaController::class, 'show']);

// Ruta para mostrar el formulario de edición de una venta específica
Route::get('/ventas/{venta}/edit', [VentaController::class, 'edit']);

// Ruta para actualizar una venta específica en la base de datos
Route::put('/ventas/{venta}', [VentaController::class, 'update']);

// Ruta para eliminar una venta específica de la base de datos
Route::delete('/ventas/{venta}', [VentaController::class, 'destroy']);
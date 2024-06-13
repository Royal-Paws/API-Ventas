<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Venta::getAllVentas();
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        // Valida los datos recibidos del request
        $request->validate([
            'usuario_ID' => 'required|integer',
            'descripcion' => 'required',
            'precio_Total' => 'required',
            'nombre_pago' => 'required|string',
            'email_pago' => 'required|email',
            'direccion' => 'required',
            'estado' => 'required',
        ]);

        // Crea una nueva venta
        $venta = Venta::create($request->all());

        // Retorna la venta creada con el código de estado 201 (Created)
        return response()->json($venta, 201);
    }

    public function show(Venta $venta)
    {
        return $venta;
    }

    public function edit(Venta $venta)
    {
        // No es necesario implementar esta función en la API.
    }

    public function update(Request $request, Venta $venta)
    {
        // Valida los datos recibidos del request
        $request->validate([
            'usuario_ID' => 'sometimes|integer',
            'descripcion' => 'sometimes|string',
            'precio_Total' => 'sometimes|numeric',
            'nombre_pago' => 'sometimes|string',
            'email_pago' => 'sometimes|email',
            'direccion' => 'sometimes|string',
            'estado' => 'sometimes|string',
        ]);

        // Actualiza la venta con los datos proporcionados
        $venta->update($request->all());

        // Retorna la venta actualizada
        return $venta;
    }

    public function destroy(Venta $venta)
    {
        // Elimina la venta
        $venta->delete();

        // Retorna una respuesta vacía con código de estado 204 (No Content)
        return response()->json(null, 204);
    } 

}
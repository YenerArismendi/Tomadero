<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\CompraProductos;
use App\Models\PagoArriendo;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compraProductos = CompraProductos::with('producto')->get();
        $pagoArriendo = PagoArriendo::all();
        return view('modules.gastos.Viewgastos', compact('compraProductos', 'pagoArriendo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::all();
        return view('modules.gastos.gastos', compact('productos'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_producto' => 'required|exists:productos,id',
            'proveedor' => 'required|string|max:255',
            'cantidad' => 'required|numeric|min:1',
            'precio' => 'required|numeric|min:0|max:999999999999.99',
            'descripcion' => 'nullable|string|max:500'
        ]);

        // Calcular el total correctamente sin formatearlo
        $validatedData['total'] = bcmul($validatedData['cantidad'], $validatedData['precio'], 2); // Multiplica con precisión de 2 decimales
        // Guardar en la base de datos

        CompraProductos::create($validatedData);

        return redirect()->route('gastos.create')->with('success', '¡Registro exitoso!');
    }

    public function storeArriendo(Request $request)
    {
        $request->validate([
            'monto' => 'required|numeric|min:0|max:999999999999.99',
            'fecha_pago' => 'required|date',
            'descripcion' => 'nullable|string|max:500'
        ]);

        // Guardar en la base de datos
        PagoArriendo::create([
            'monto' => $request->monto,
            'fecha_pago' => $request->fecha_pago,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('gastos.create')->with('success', '¡Registro exitoso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

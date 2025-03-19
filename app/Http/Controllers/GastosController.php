<?php

namespace App\Http\Controllers;

use App\Models\PagoServicios;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\CompraProductos;
use App\Models\PagoArriendo;
use App\Models\Personal;
use App\Models\PagoPersonal;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compraProductos = CompraProductos::with('producto')->get();
        $pagoArriendo = PagoArriendo::all();
        $pagoPersonal = PagoPersonal::with('personal')->get();
        $pagoServicios = PagoServicios::all();
        return view('modules.gastos.Viewgastos', compact('compraProductos', 'pagoArriendo', 'pagoPersonal', 'pagoServicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Productos::all();
        $pagoPersonal = Personal::where('estado', 1)->get();
        return view('modules.gastos.gastos', compact('productos', 'pagoPersonal'));

    }

    /**
     * Store a newly created resource in storage.
     */
    //Metodo para almacenar la compra de productos
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

    //Metodo para almacenar el pago del arriendo
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

    //Metodo para almacenar el pago del personal
    public function storePersonal(Request $request)
    {
        $request->validate([
            'personal_id' => 'required|exists:personal,id',
            'forma_pago' => 'required|string|max:255',
            'total' => 'required|numeric|min:0|max:999999999999.99',
            'descripcion' => 'nullable|string|max:500'
        ]);

        PagoPersonal::create([
            'personal_id' => $request->personal_id,
            'forma_pago' => $request->forma_pago,
            'total' => $request->total,
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('gastos.create')->with('success', 'Registro exitoso!');
    }

    //Metodo para almacenar el pago de los servicios
    public function storeServicios(Request $request)
    {
      $request->validate([
          'tipo_servicio' => 'required|string|max:255',
          'fecha' => 'required|date',
          'monto' => 'required|numeric|min:0|max:999999999999.99',
          'descripcion' => 'nullable|string|max:500'
      ]);

     PagoServicios::create([
         'tipo_servicio' => $request->tipo_servicio,
         'fecha' => $request->fecha,
         'monto' => $request->monto,
         'descripcion' => $request->descripcion
     ]);

     return redirect()->route('gastos.create')->with('success', 'Registro exitoso!');
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

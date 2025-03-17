<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Facades\Log;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosProductos = Productos::all();
        return view('modules.productos.productos', compact('datosProductos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validación de los datos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'categoria' => 'required|string|max:255',
                'tamanio' => 'required|string|max:255',
                'estado' => 'required|integer',
                'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'descripcion' => 'nullable|string|max:500'
            ]);

            // Manejo de la imagen
            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->store('productos', 'public');
            } else {
                $imagenPath = null;
            }

            // Crear producto con Eloquent
            Productos::create([
                'nombre' => $request->nombre,
                'tamanio' => $request->tamanio,
                'categoria' => $request->categoria,
                'estado' => $request->estado,
                'descripcion' => $request->descripcion,
                'imagen' => $imagenPath
            ]);

            return to_route('productos.index')->with('success', '¡Registro exitoso!');

        } catch (Exception $e) {
            // Registra el error en logs
            Log::error('Error al registrar producto: ' . $e->getMessage());

            // Redirecciona con un mensaje de error
            return redirect()->back()->with('error', 'Hubo un error al registrar el producto: ' . $e->getMessage());
        }
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
        //validacion de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'tamanio' => 'required|string|max:255',
            'estado' => 'required|integer',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'descripcion' => 'nullable|string|max:500'
        ]);

        $producto = Productos::findOrFail($id);
        //manejo de imagen
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('productos', 'public');
        } else {
            $imagenPath = $producto->imagen;
        }

        //Modificacion de productos
        $producto->update([
            'nombre' => $request->nombre,
            'tamanio' => $request->tamanio,
            'categoria' => $request->categoria,
            'estado' => $request->estado,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenPath
        ]);

        return to_route('productos.index')->with('success', '¡La actualización del producto fue exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::findOrFail($id);
        $producto->delete();
        return to_route('productos.index')->with('success', '¡El producto fue eliminado exitosamente!');
    }
}

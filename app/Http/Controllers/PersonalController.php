<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personal = Personal::all();
        return view('modules.personal.personal', compact('personal'));
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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:255',
            'numero_documento' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'correo' => 'nullable|string|max:255',
            'cargo' => 'required|string|max:255',
            'tipo_pago' => 'required|string|max:255',
            'cuenta_bancaria' => 'nullable|string|max:255',
        ]);

        Personal::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'cargo' => $request->cargo,
            'tipo_pago' => $request->tipo_pago,
            'cuenta_bancaria' => $request->cuenta_bancaria,
        ]);

        return redirect()->route('personal.index')->with('success', '¡Registro exitoso!');

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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:255',
            'numero_documento' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'correo' => 'nullable|string|max:255',
            'cargo' => 'required|string|max:255',
            'tipo_pago' => 'required|string|max:255',
            'cuenta_bancaria' => 'nullable|string|max:255',
            'estado' => 'required|integer|in:1,2', // Asegura que solo acepte 1 o 2

        ]);

        $personal = Personal::find($id);

        $personal->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'cargo' => $request->cargo,
            'tipo_pago' => $request->tipo_pago,
            'cuenta_bancaria' => $request->cuenta_bancaria,
            'estado' => $request->estado,
        ]);

        return redirect()->route('personal.index')->with('success', '¡Actualización exitosa!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $personal = Personal::find($id);
        $personal->delete();
        return redirect()->route('personal.index')->with('success', '¡Eliminación exitosa!');
    }
}

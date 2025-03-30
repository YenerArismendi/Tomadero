<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesas;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesas::all();
        return view('modules.mesas.mesas', compact('mesas'));
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
            'numero_mesa' => 'required|integer',
            'descripcion' => 'nullable',
        ]);

        Mesas::create([
            'numero_mesa' => $request->numero_mesa,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('mesas.index')->with('success', '¡Registro exitoso!');

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
            'numero_mesa' => 'required|integer',
            'estado' => 'required|integer|int:1,2',
            'descripcion' => 'nullable',
        ]);

        $mesa = Mesas::find($id);

        $mesa->update([
            'numero_mesa' => $request->numero_mesa,
            'estado' => $request->estado,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('mesas.index')->with('success', '¡Actualización exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

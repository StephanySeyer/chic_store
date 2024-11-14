<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MarcaController extends Controller
{
    //hecho el mierc
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::paginate(3);
        return view('marca.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'origen' => 'required|string|max:255',
            'disponible' => 'required|string|max:50',
        ]);
        
        Marca::create([
            'nombre' => $validated['nombre'],
            'origen' => $validated['origen'],
            'disponible' => $validated['disponible'],

        ]);
        Alert::success('Marca creada', 'La marca ha sido creada correctamente')->flash();
        return redirect()->route('marca.index');
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
    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marca.edit', compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'origen' => 'required|string|max:255',
            'disponible' => 'required|integer|max:50',
        ]);

        $marca = Marca::find($id);
        $marca->nombre = $request->nombre;
        $marca->origen = $request->origen;
        $marca->disponible = $request->disponible;
        $marca->save();

        //sweet en todos 2
        Alert::success('Exito', 'Los datos han sido guardados correctamente');
        return redirect()->route('marca.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        Alert::success('Exito', 'La marca ha sido eliminado correctamente');
        return redirect()->route('marca.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::paginate(5);
        return view('marca.index', ['marcas' => $marcas]);
    }

    public function create()
    {
        return view('marca.create');
    }

    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->nombre = $request->post('nombre');
        $marca->origen = $request->post('origen');
        $marca->ubicacion = $request->post('ubicacion');

        $marca->save();
        
        Alert::success('Marca guardada', 'La marca se creó correctamente');
        return redirect()->route('marca.index');
    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marca.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        $marca->nombre = $request->nombre;
        $marca->origen = $request->origen;
        $marca->ubicacion = $request->ubicacion;

        $marca->save();
        
        Alert::success('Marca editada', 'Se editó la información de la marca');
        return redirect()->route('marca.index');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();
        
        Alert::success('Marca eliminada', 'La marca se eliminó correctamente');
        return redirect()->route('marca.index');
    }
}

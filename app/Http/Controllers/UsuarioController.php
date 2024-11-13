<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Usuario::paginate(3);
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:15',
            'email' => 'required|string|email|max:30',
            'password' => 'required|string|min:8',
            'role' => 'required|string|max:255',
        ]);
        
        Usuario::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        return redirect()->route('user.index');

        Alert::success('Usuario creado', 'El usuario ha sido creado correctamente')->flash();
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
        $user = Usuario::find($id);
        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $user = Usuario::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('user.index');
        Alert::success('Exito', 'Los datos han sido guardados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Usuario::find($id);
        $user->delete();
        Alert::success('Exito', 'El usuario ha sido eliminado correctamente');
        return redirect()->route('user.index');
    }
}


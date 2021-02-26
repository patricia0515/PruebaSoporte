<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = User::All();
        return view('admin.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // estamos agregando reglas de validación
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cedula' => 'required',
            'fecha' => 'required',
            'sexo' => 'required',
            'pais' => 'required',
            'area' => 'required'
        ]);

        // llamamos el modelo area y por medio del metodo create le paso la información que viene del formulario, finalmente lo pasamos por una variable $persona
        $persona = User::create($request->all());

        // Vamos a pedir que lo redireccione a la ruta edit, esta ruta necesita el parametro que para el caso es $persona, la variable que acabamos de crear
        return redirect()->route('admin.personas.edit', $persona)->with('info', 'El Usuario se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $persona)
    {
        return view('admin.personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $persona)
    {
        // estamos agregando reglas de validación
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cedula' => 'required',
            'fecha' => 'required',
            'sexo' => 'required',
            'pais' => 'required',
            'area' => 'required'

        ]);

        // Si pasa la regla de validación vamos a actualizar en la base de datos, llamando el objeto User y le paso el metodo update, dentro del metodo le pasamos toda la información que viene del formulario 
        $persona->update($request->all());

        // Una vez actualizada la información redireccionamos a la ruta editar y enviamos un mensaje de sesión al usuario donde se le indique que la actualización se realizo
        return redirect()->route('admin.personas.edit', $persona)->with('info', 'El Usuario se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($persona)
    {
        // Accedo al objeto area y le paso el metodo delete y redireccionamos al index con un mensaje de validación
        $persona->delete();
        return redirect()->route('admin.personas.index')->with('info', 'El Usuario se elimino con éxito');
    }
}

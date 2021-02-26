<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::All();
        return view('admin.areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.areas.create');
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
            'descripcion' => 'required'
        ]);

        // llamamos el modelo area y por medio del metodo create le paso la información que viene del formulario, finalmente lo pasamos por una variable $area
        $area = Area::create($request->all());

        // Vamos a pedir que lo redireccione a la ruta edit, esta ruta necesita el parametro que para el caso es $area, la variable que acabamos de crear
        return redirect()->route('admin.areas.edit', $area)->with('info', 'El Área se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Vamos a pasar una instancia del model Area
    public function show(Area $area)
    {
        return view('admin.areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Vamos a pasar una instancia del model Area
    public function edit(Area $area)
    {
        return view('admin.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Vamos a pasar una instancia del model Area
    public function update(Request $request, Area $area)
    {
        // estamos agregando reglas de validación
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required'
        ]);

        // Si pasa la regla de validación vamos a actualizar en la base de datos, llamando el objeto area y le paso el metodo update, dentro del metodo le pasamos toda la información que viene del formulario 
        $area->update($request->all());

        // Una vez actualizada la información redireccionamos a la ruta editar y enviamos un mensaje de sesión al usuario donde se le indique que la actualización se realizo
        return redirect()->route('admin.areas.edit', $area)->with('info', 'El Área se actualizo con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Vamos a pasar una instancia del model Area
    public function destroy(Area $area)
    {
        // Accedo al objeto area y le paso el metodo delete y redireccionamos al index con un mensaje de validación
        $area->delete();
        return redirect()->route('admin.areas.index')->with('info', 'El Área se elimino con éxito');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;

class LocalizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localizaciones = Localizacion::all();
        return view('localizacion.localizaciones', ['localizaciones' => $localizaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('localizacion.addLocalizaciones');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $localizacion = new Localizacion();
        $localizacion->ciudad = $request->ciudad;
        $localizacion->nombreEdificio = $request->nombreEdificio;
        $localizacion->direccionEdificio = $request->direccionEdificio;
        $localizacion->numeroSala = $request->numeroSala;
        $localizacion->save();

        return redirect()->route('localizaciones');
    }

    /**
     * Display the specified resource.
     */
    public function show(Localizacion $localizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Localizacion $localizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Localizacion $localizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Localizacion::destroy($id);
        return redirect()->route('localizaciones');
    }
}

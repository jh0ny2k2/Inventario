<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();
        return view('/productos/productos', ['productos' => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $localizaciones = Localizacion::all();
        return view('/productos/addProducto', ['localizaciones' => $localizaciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table = new Producto();
        $table->codigo = 'PROD-' . $request->codigo;
        $table->modelo = $request->modelo;  
        $table->fabricante = $request->fabricante;
        $table->descripcion = $request->descripcion;
        $table->stock = $request->stock;
        $table->estado = $request->estado;
        $table->localizaciones_id = $request->localizacion;
        $table->save();

        //SUBIR IMAGEN
        $id = $table->id;
        $request->file('imagen')->storeAs(
            'public',
            'producto_' . $id . '.jpg'
        );

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::where('id', $id)->first();
        return view('/productos/showProducto', ['producto' => $producto]);
    }

    public function showAddLocation($id)
    {
        $productos = Producto::where('id', $id)->first();
        $localizaciones = Localizacion::all();
        return view('/productos/addLocation', ['producto' => $productos , 'localizaciones' => $localizaciones]);
    }

    public function AddLocation(Request $request, $id)
    {
        $producto = Producto::where('id', $id)->first();
        $producto -> localizaciones_id = $request -> localizacion;
        $producto -> save();

        return redirect()->route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::where('id', $id)->first();
        return view('/productos/editProducto', ['productos' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $producto = Producto::where('id', $request->id)->first();
        $producto->codigo = $request->codigo;
        $producto->modelo = $request->modelo;  
        $producto->fabricante = $request->fabricante;
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->estado = $request->estado;
        $producto->localizaciones_id = $producto->localizacion;
        $producto->save();

        //SUBIR IMAGEN
        $id = $producto->id;
        $request->file('imagen')->storeAs(
            'public',
            'producto_' . $id . '.jpg'
        );

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id);
        return redirect()->route('dashboard');
    }
}

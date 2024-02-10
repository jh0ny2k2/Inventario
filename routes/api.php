<?php

use App\Http\Resources\InventarioResource;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTA CREACIÓN DE TOKEN: 
Route::post('/tokens/create', function (Request $request) {
    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
          'message' => 'No Autorizado'
        ], 401);
      }
      return response()->json([
        'token' => $request->user()->createToken($request->email)->plainTextToken,
        'message' => 'Creado'
      ]);
});


//RUTAS API
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/productos', function () {
        return InventarioResource::collection(Producto::all());
    });

    Route::get('/productos/{id}', function (string $id) {
        return new InventarioResource(Producto::findOrFail($id));
    });

    Route::delete('/productos/{id}', function (string $id) {
        if (InventarioResource::findOrFail($id)) {
            InventarioResource::destroy($id);
            return ['message' => 'Producto eliminado'];
        } 
    });

    Route::post('/productos', function (Request $request) {
        $juego = new Producto;
        $juego->nombre = $request->nombre;
        $juego->plataforma = $request->plataforma;
        $juego->edadR = $request->edadR;
        $juego->nota = $request->nota;
        $juego->save();
        return ['message' => 'Producto creado',
                'Producto' => $juego];
    });


});
<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LocalizacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Database\Factories\ProductoFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});








Route::get('/categorias', [CategoriaController::class, 'index'])->middleware(['auth', 'verified'])->name('categorias');

Route::middleware('auth')->group(function () {

    // RUTAS PARA EL PERFIL CREADAS POR BREEZE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // RUTAS PARA LAS LOCALIZACIONES
    Route::get('/localizaciones', [LocalizacionController::class, 'index'])->name('localizaciones');
    Route::get('/addLocalizacion', [LocalizacionController::class, 'create'])->name('addLocalizacion');
    Route::post('/localizacion/store', [LocalizacionController::class, 'store'])->name('localizacion.store');
    Route::get('/localizacion/{id}', [LocalizacionController::class, 'destroy']);

    // RUTAS PARA LOS PRODUCTOS
    Route::get('/dashboard', [ProductoController::class, 'index'])->name('dashboard');
    Route::get('/addProducto', [ProductoController::class, 'create'])->name('addProducto');
    Route::post('/producto/store', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('/producto/{id}', [ProductoController::class, 'destroy']);
    Route::get('/producto/editar/{id}', [ProductoController::class, 'edit']);
    Route::post('/producto/update/{id}', [ProductoController::class, 'update'])->name("productos.update");
    Route::get('/producto/show/{id}', [ProductoController::class, 'show']);
    Route::get('/producto/addLocalizacion/{id}', [ProductoController::class, 'showAddLocation']);
    Route::post('/producto/addLocation/{id}', [ProductoController::class, 'addLocation']);

    // RUTAS PARA LAS CATEGORIAS
    Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
    Route::get('/addCategoria', [CategoriaController::class, 'create'])->name('addCategoria');
    Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categorias.store');
    Route::get('/categoria/{id}', [CategoriaController::class, 'destroy']);
});

// Route::prefix('Productos')->middleware(['auth', 'verified'])->group(function () {
//     // Route::get('/dashboard', [ProductoController::class, "index"]);
// });

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\Admin\NoticiasController as AdminNoticiasController;
use App\Http\Controllers\Admin\TableroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Rutas de noticias

Route::get('/', [InicioController::class, "index"]);

Route::get('/contacto', [InicioController::class,"contacto"]);

Route::get('/noticias', [NoticiasController:: class, "lista"])->name("noticias");

Route::get('/noticias/{id}',[NoticiasController::class, "detalles"])->name("noticias.detalles");

Route::get("/admin/noticias", [AdminNoticiasController::class, "index"])->name("admin.noticias.index");

Route::get("/admin/noticias/create", [AdminNoticiasController::class, "create"])->name("admin.noticias.create");

Route::post("/admin/noticias", [AdminNoticiasController::class, "store"])->name("admin.noticias.store");

Route::get("/admin/noticias/{id}/edit",[AdminNoticiasController::class, "edit"])->name("admin.noticias.edit");

Route::put("/admin/noticia/{id}", [AdminNoticiasController::class, "update"])->name("admin.noticias.update");


Route::get("/admin/noticias/{id}/confirmdelete",[AdminNoticiasController::class, "confirmdelete"])->name("admin.noticias.confirmdelete");

Route::delete("/admin/noticia/{id}", [AdminNoticiasController::class, "destroy"])->name("admin.noticias.destroy");

Route::get("/admin/noticias/{id}",[AdminNoticiasController::class, "show"])->name("admin.noticias.show");

Route::get("/admin/blank",[AdminNoticiasController::class, "blank"])->name("admin.blank");

//Tablero
Route::get("/admin", [TableroController::class,"tablero"])->name("admin.tablero");
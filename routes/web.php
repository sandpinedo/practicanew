<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // Datos de ejemplo
    $destinosPopulares = ['Destino 1', 'Destino 2', 'Destino 3'];
    $ofertasEspeciales = [
        ['nombre' => 'Oferta 1', 'descuento' => '10% de descuento'],
        ['nombre' => 'Oferta 2', 'descuento' => '20% de descuento'],
    ];
    $testimonios = [
        ['nombre' => 'Cliente 1', 'comentario' => 'Excelente experiencia en nuestro viaje.'],
        ['nombre' => 'Cliente 2', 'comentario' => 'Recomiendo totalmente esta agencia de viajes.'],
    ];

    return view('pagina_turismo', compact('destinosPopulares', 'ofertasEspeciales', 'testimonios'));
});


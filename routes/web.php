<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

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
    return view('pdf.index');
});

Route::get('/generar-pdf', [PdfController::class, 'generarPdf'])->name('generar.pdf');




// Paso 1: Instalación de DomPDF
// Primero, asegúrate de haber instalado DomPDF mediante Composer. Si aún no lo has hecho, ejecuta el siguiente comando en tu terminal:

// composer require barryvdh/laravel-dompdf

// Paso 2: Configuración inicial
// Laravel DomPDF debería funcionar con la configuración predeterminada después de la instalación. Sin embargo, si necesitas personalizar la configuración, puedes publicar el archivo de configuración ejecutando:

// php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"

// Paso 3: Crear el controlador
// Vamos a crear un controlador para manejar la generación y descarga del PDF.

// php artisan make:controller PdfController

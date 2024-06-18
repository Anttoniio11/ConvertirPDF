<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acta;
use PDF;

class PdfController extends Controller
{
    public function generarPdf()
    {
        // Obtener datos para el PDF (por ejemplo, desde el modelo Acta)
        $actas = Acta::all();

        // Generar PDF
        $pdf = PDF::loadView('pdf.ejemplo', compact('actas'));

        // Descargar PDF
        return $pdf->download('ejemplo.pdf');
    }
}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Descarga de PDF</title>
</head>
<body>
    <h1>Ejemplo de Descarga de PDF con DomPDF</h1>

    <p>Presiona el siguiente botón para descargar el PDF:</p>

    <form action="{{ route('generar.pdf') }}" method="GET">
        <button type="submit">Descargar PDF</button>
    </form>
</body>
</html>
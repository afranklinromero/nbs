<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Sugerencia</title>
</head>
<body>
    <p>nombre: {{ $sugerenciasNBS->name }}.</p>
    <p>Correo: {{ $sugerenciasNBS->email }}</p>
    <p>Asunto: {{ $sugerenciasNBS->subject }}</p>
    <p>Contenido: {{ $sugerenciasNBS->content }}</p>
    <p>Creacion: {{ $sugerenciasNBS->created_at }}</p>
    <p>Modificacion: {{ $sugerenciasNBS->updated_at }}</p>
    <p>Estado: {{ $sugerenciasNBS->estado }}</p>

</body>
</html>

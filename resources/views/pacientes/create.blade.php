<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar paciente</title>
</head>
<body>
    <h1>Registrar paciente</h1>
    <form action="{{ route('pacientes.store') }}" method="post">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="ci">CI</label>
            <input type="text" id="ci" name="ci">
        </div>
        <div>
            <label for="whatsapp">Whatsapp</label>
            <input type="number" id="whatsapp" name="whatsapp">
        </div>
        <div>
            <label for="fecha_nac">Fecha de nacimiento</label>
            <input type="text" id="fecha_nac" name="fecha_nac">
        </div>
        <div>
            <button>Guardar paciente</button>
        </div>
    </form>
</body>
</html>
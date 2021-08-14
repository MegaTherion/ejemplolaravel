<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de pacientes</title>
</head>
<body>
    <h1>Lista de pacientes</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>CI</th>
                <th>Whatsapp</th>
                <th>Fecha de nacimiento</th>
                <th>Fecha de creación</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($pacientes as $paciente)    
            <tr>
                <td>{{ $paciente->id }}</td>
                <td>{{ $paciente->nombre }}</td>
                <td>{{ $paciente->ci }}</td>
                <td>
                    <a href="https://wa.me/591{{ $paciente->whatsapp }}/?text=Bienvenido%20a%20consultorio%20dental%20Dientes%20de%20sable" target="_blank" rel="noopener noreferrer">
                        {{ $paciente->whatsapp }}
                    </a>
                </td>
                <td>{{ $paciente->fecha_nac }}</td>
                <td>{{ $paciente->created_at }}</td>                
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
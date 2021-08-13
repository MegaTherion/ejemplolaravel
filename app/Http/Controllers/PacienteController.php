<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    // Este archivo ha sido generado con el comando: php artisan make:controller PacienteController

    public function crearRegistro()
    {
        // Crear objeto de tipo Paciente
        $paciente = new Paciente();
        
        // Asignar datos
        $paciente->nombre = "Maria Isnado";
        $paciente->ci = "7437828-A";
        $paciente->whatsapp = 70546221;
        $paciente->fecha_nac = "1996-06-06";

        // Guardar el objeto (se guarda en la DB)
        $paciente->save();

        return response('El registro ha sido creado'); 
    }

    public function create()
    {
        return view('pacientes/create');
    }

    public function store(Request $request)
    {
        Paciente::create($request->all());
        return response('El paciente ha sido creado');
    }
}

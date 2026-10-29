<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Space;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 1. Mostrar la lista de todas las tareas
    public function index()
    {
        // Obtenemos las tareas con la información de sus espacios y usuarios asignados
        $tareas = Task::with(['espacio', 'usuario'])->get();
        return view('tasks.index', compact('tareas'));
    }

    // 2. Guardar una nueva tarea en la base de datos
    public function store(Request $request)
    {
        // Validamos que los datos del formulario sean correctos
        $datos_validados = $request->validate([
            'space_id' => 'required|exists:spaces,id',
            'descripcion' => 'required|string|max:500',
            'prioridad' => 'required|in:Baja,Media,Alta',
        ]);

        // Asignamos el estado inicial por defecto
        $datos_validados['estado'] = 'Pendiente';

        // Creamos la nueva tarea
        Task::create($datos_validados);

        return redirect()->back()->with('exito', 'Tarea creada correctamente.');
    }

    // 3. Cambiar el estado de una tarea (ej. de 'Pendiente' a 'Completada')
    public function cambiarEstado(Request $request, $id)
    {
        $tarea = Task::findOrFail($id);

        $request->validate([
            'nuevo_estado' => 'required|in:Pendiente,En Proceso,Completada',
        ]);

        $tarea->estado = $request->nuevo_estado;
        $tarea->save();

        return redirect()->back()->with('exito', 'Estado actualizado correctamente.');
    }
}
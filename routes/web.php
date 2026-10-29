<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TaskController;

// 1. Ruta para ver la lista de tareas
Route::get('/tareas', [TaskController::class, 'index'])->name('tareas.index');

// 2. Ruta para guardar una nueva tarea desde el formulario
Route::post('/tareas', [TaskController::class, 'store'])->name('tareas.store');

// 3. Ruta para actualizar el estado de una tarea (ej. al pulsar 'Completada' en la PDA)
Route::patch('/tareas/{id}/estado', [TaskController::class, 'cambiarEstado'])->name('tareas.cambiarEstado');

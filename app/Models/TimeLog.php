<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'hora_inicio',
        'hora_fin',
        'duracion_minutos',
    ];

    // Relación: Un registro pertenece a una tarea
    public function tarea()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
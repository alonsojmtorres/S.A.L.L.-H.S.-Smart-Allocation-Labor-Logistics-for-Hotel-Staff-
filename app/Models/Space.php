<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_espacio',
        'tipo_espacio',
        'estado',
    ];

    // Relación: Un espacio tiene muchas tareas
    public function tareas()
    {
        return $this->hasMany(Task::class);
    }
}
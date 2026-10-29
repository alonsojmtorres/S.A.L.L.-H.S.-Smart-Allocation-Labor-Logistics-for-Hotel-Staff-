<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'space_id',
        'user_id',
        'event_id',
        'descripcion',
        'prioridad',
        'estado',
    ];

    // Relación: Una tarea pertenece a un espacio
    public function espacio()
    {
        return $this->belongsTo(Space::class, 'space_id');
    }

    // Relación: Una tarea es asignada a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación: Una tarea tiene registros de tiempo
    public function registrosTiempo()
    {
        return $this->hasMany(TimeLog::class);
    }
}
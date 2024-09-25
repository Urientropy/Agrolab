<?php

namespace App\Models;

// app/Models/Actividad.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 
        'finca_id', 
        'titulo', 
        'descripcion', 
        'fecha_inicio', 
        'fecha_fin', 
        'hora_inicio', 
        'hora_fin', 
        'tipo', 
        'recordatorio', 
        'tiempo_recordatorio', 
        'fotos'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function finca()
    {
        return $this->belongsTo(Finca::class);
    }
}

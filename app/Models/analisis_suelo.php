<?php

namespace App\Models;

// app/Models/AnalisisSuelo.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analisis_suelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'finca_id', 
        'fecha_analisis', 
        'ph', 
        'conductividad', 
        'nitrogeno', 
        'fosforo', 
        'potasio', 
        'materia_organica', 
        'textura', 
        'capacidad_intercambio_cationico', 
        'absorcion_humedad', 
        'laboratorio', 
        'observaciones'
    ];

    public function finca()
    {
        return $this->belongsTo(Finca::class);
    }

    public function recomendaciones()
    {
        return $this->hasMany(recomendaciones::class);
    }
}

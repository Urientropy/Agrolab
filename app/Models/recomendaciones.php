<?php

namespace App\Models;

// app/Models/Recomendacion.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recomendaciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'analisis_suelo_id', 
        'fecha_generacion', 
        'descripcion'
    ];

    public function analisisSuelo()
    {
        return $this->belongsTo(analisis_suelo::class);
    }

    public function fertilizantes()
    {
        return $this->belongsToMany(Fertilizante::class, 'recomendacion_fertilizante');
    }
}

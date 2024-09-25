<?php

namespace App\Models;

// app/Models/Fertilizante.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilizante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'tipo'];

    public function aplicacionFertilizantes()
    {
        return $this->hasMany(aplicacion_fertilizantes::class);
    }

    public function recomendaciones()
    {
        return $this->belongsToMany(recomendaciones::class, 'recomendacion_fertilizantes');
    }
}

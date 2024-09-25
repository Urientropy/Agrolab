<?php

namespace App\Models;

// app/Models/Finca.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nombre', 
        'ubicacion_lat', 
        'ubicacion_long', 
        'tipo_de_suelo', 
        'superficie'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function cultivos()
    {
        return $this->hasMany(Cultivo::class);
    }

    public function analisisSuelos()
    {
        return $this->hasMany(analisis_suelo::class);
    }

    public function actividades()
    {
        return $this->hasMany(Actividades::class);
    }
}

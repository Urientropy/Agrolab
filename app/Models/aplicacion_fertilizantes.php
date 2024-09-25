<?php

namespace App\Models;

// app/Models/AplicacionFertilizante.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aplicacion_fertilizantes extends Model
{
    use HasFactory;

    protected $fillable = [
        'cultivo_id', 
        'fecha_aplicacion', 
        'fertilizante_id', 
        'cantidad', 
        'metodo_aplicacion'
    ];

    public function cultivo()
    {
        return $this->belongsTo(Cultivo::class);
    }

    public function fertilizante()
    {
        return $this->belongsTo(Fertilizante::class);
    }
}

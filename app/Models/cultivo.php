<?php

namespace App\Models;

// app/Models/Cultivo.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 
        'finca_id', 
        'nombre', 
        'variedad', 
        'fecha_siembra'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function finca()
    {
        return $this->belongsTo(Finca::class);
    }

    public function aplicacionFertilizantes()
    {
        return $this->hasMany(aplicacion_fertilizantes::class);
    }

    public function rendimientoCultivos()
    {
        return $this->hasMany(rendimiento_cultivos::class);
    }
}

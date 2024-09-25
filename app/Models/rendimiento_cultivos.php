<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendimiento_cultivos extends Model
{
    use HasFactory;

    protected $fillable = [
        'cultivo_id', 
        'fecha_cosecha', 
        'rendimiento', 
        'unidad_medida', 
        'observaciones', 
        'fotos'
    ];

    public function cultivo()
    {
        return $this->belongsTo(Cultivo::class);
    }
}

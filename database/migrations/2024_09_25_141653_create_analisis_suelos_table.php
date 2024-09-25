<?php

// database/migrations/create_analisis_suelos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('analisis_suelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finca_id')->constrained()->cascadeOnDelete();
            $table->date('fecha_analisis');
            $table->decimal('ph', 4, 2)->nullable();
            $table->decimal('conductividad', 5, 2)->nullable();
            $table->decimal('nitrogeno', 5, 2)->nullable();
            $table->decimal('fosforo', 5, 2)->nullable();
            $table->decimal('potasio', 5, 2)->nullable();
            $table->decimal('materia_organica', 5, 2)->nullable();
            $table->string('textura', 50)->nullable();
            $table->decimal('capacidad_intercambio_cationico', 5, 2)->nullable();
            $table->decimal('absorcion_humedad', 5, 2)->nullable();
            $table->string('laboratorio', 100)->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('analisis_suelos');
    }
};

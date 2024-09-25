<?php

// database/migrations/create_recomendacion_fertilizante_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recomendacion_fertilizantes', function (Blueprint $table) {
            $table->foreignId('recomendaciones_id')->constrained()->cascadeOnDelete();
            $table->foreignId('fertilizante_id')->constrained()->cascadeOnDelete();
            $table->primary(['recomendaciones_id', 'fertilizante_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recomendacion_fertilizante');
    }
};

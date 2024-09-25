<?php

// database/migrations/create_aplicacion_fertilizantes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aplicacion_fertilizantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cultivo_id')->constrained()->cascadeOnDelete();
            $table->date('fecha_aplicacion');
            $table->foreignId('fertilizante_id')->constrained()->cascadeOnDelete();
            $table->decimal('cantidad', 8, 2);
            $table->string('metodo_aplicacion', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aplicacion_fertilizantes');
    }
};

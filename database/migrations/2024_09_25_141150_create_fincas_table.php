<?php

// database/migrations/create_fincas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fincas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1)->constrained()->cascadeOnDelete();
            $table->string('nombre', 100);
            $table->decimal('ubicacion_lat', 9, 6)->nullable();
            $table->decimal('ubicacion_long', 9, 6)->nullable();
            $table->string('tipo_de_suelo', 50)->nullable();
            $table->decimal('superficie', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fincas');
    }
};

<?php

 // database/migrations/create_rendimiento_cultivos_table.php

 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 
 return new class extends Migration
 {
     public function up(): void
     {
         Schema::create('rendimiento_cultivos', function (Blueprint $table) {
             $table->id();
             $table->foreignId('cultivo_id')->constrained()->cascadeOnDelete();
             $table->date('fecha_cosecha');
             $table->decimal('rendimiento', 8, 2);
             $table->string('unidad_medida', 10);
             $table->text('observaciones')->nullable();
             $table->text('fotos')->nullable();
             $table->timestamps();
         });
     }
 
     public function down(): void
     {
         Schema::dropIfExists('rendimiento_cultivos');
     }
 };

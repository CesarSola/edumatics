<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('validaciones_cartas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estandar_id')->constrained('estandares')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('carta_id')->nullable()->constrained('cartas_documentos')->onDelete('cascade');
            $table->enum('tipo_validacion', ['validar', 'rechazar']);
            $table->text('comentario')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validaciones_cartas');
    }
};

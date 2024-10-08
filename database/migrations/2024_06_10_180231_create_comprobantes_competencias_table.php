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
        Schema::create('comprobantes_competencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('estandar_id');
            $table->string('comprobante_pago', 999);
            $table->json('estado')->nullable(); // Estado como JSON
            $table->unsignedBigInteger('evaluador_id')->nullable(); // Evaluador asignado, puede ser nulo
            $table->timestamps();

            // Claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('estandar_id')->references('id')->on('estandares')->onDelete('cascade');
            $table->foreign('evaluador_id')->references('id')->on('users')->onDelete('set null'); // Enlazar con el evaluador
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantes_competencias');
    }
};

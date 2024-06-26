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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('id_estandar')
                ->nullable()
                ->constrained('estandares')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('instructor')->nullable();
            $table->integer('duration')->nullable();
            $table->string('modalidad')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_final')->nullable();
            $table->string('costo')->nullable();
            $table->string('certification')->nullable();
            $table->timestamps();
        });

        Schema::create('curso_documentosnec', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')->constrained('cursos')->cascadeOnDelete();
            $table->foreignId('documentosnec_id')->constrained('documentosnec')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_documentosnec');
        Schema::dropIfExists('cursos');
    }
};

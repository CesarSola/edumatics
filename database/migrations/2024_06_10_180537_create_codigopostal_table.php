<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigopostalTable extends Migration
{
    public function up(): void
    {
        Schema::create('codigopostal', function (Blueprint $table) {
            $table->id();
            $table->string('d_codigo');
            $table->string('d_asenta');
            $table->string('d_tipo_asenta');
            $table->string('D_mnpio');
            $table->string('d_estado');
            $table->string('d_ciudad')->nullable();
            $table->string('d_CP')->nullable();
            $table->string('c_estado');
            $table->string('c_oficina')->nullable();
            $table->string('c_tipo_asenta');
            $table->string('c_mnpio');
            $table->string('id_asenta_cpcons');
            $table->string('d_zona');
            $table->string('c_cve_ciudad')->nullable();
            $table->timestamps(); // Añadir created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('codigopostal');
    }
}

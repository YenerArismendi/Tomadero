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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('telefono');
            $table->string('correo')->nullable();
            $table->string('cargo');
            $table->string('estado')->default(1);
            $table->string('tipo_pago');
            $table->integer('cuenta_bancaria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo'); // Campo bigint, incremental, clave primaria
            $table->char('cPerApellidos', 50)->nullable(); // Campo char, 50 caracteres, no nulo
            $table->char('cPerNombre', 50)->nullable(); // Campo char, 50 caracteres, no nulo
            $table->string('cPerDireccion', 100)->nullable(); // Campo varchar, 100 caracteres, nulo
            $table->date('dPerFecNac'); // Campo date, nulo
            $table->integer('nPerEdad'); // Campo integer, no nulo
            $table->char('cPerSexo', 15)->nullable()->default('Masculino');
            $table->decimal('nPerSueldo', 6, 2); // Campo decimal, 6 dígitos totales, 2 decimales, no nulo
            $table->string('cPerRnd', 50)->nullable(); // Campo varchar, 50 caracteres, nulo
            $table->char('cPerEstado', 1)->default('1'); // Campo char, 1 carácter, no nulo, predeterminado '1'
            $table->rememberToken(); // Campo varchar para remember token, no nulo
            $table->timestamps(); // Campos created_at y updated_at, no nulos

            // Agregar índices
            $table->index('cPerApellidos', 'persona_cperapellido_index');
            $table->index('cPerNombre', 'persona_cpernombre_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};

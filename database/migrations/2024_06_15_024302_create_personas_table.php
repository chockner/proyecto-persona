<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id('nPerCodigo'); // Auto-increment y clave primaria
            $table->char('cPerApellido', 50)->nullable();
            $table->char('cPerNombre', 50)->nullable();
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac')->nullable();
            $table->integer('nPerEdad')->nullable(); // No auto-increment
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50)->default('defaultRndValue');
            $table->char('nPerEstado', 1)->default('1');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
};

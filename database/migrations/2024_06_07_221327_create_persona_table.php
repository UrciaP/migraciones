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
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo'); // llave primaria, bigint(20), notnull
            $table->char('cPerApellido', 50)->nullable(); // char(50), null
            $table->char('cPerNombre', 50)->nullable(); // char(50), null
            $table->string('cPerDireccion', 100)->nullable(); // varchar(100), null
            $table->date('cPerFecNac'); // date, notnull
            $table->integer('cPerEdad'); // int(11), notnull
            $table->decimal('cPerSueldo', 6, 2); // decimal(6,2), notnull
            $table->string('cPerRnd', 550); // varchar(550), notnull
            $table->char('cPerEstado', 1)->default('1'); // char(1), notnull, valor predeterminado: '1'
            $table->rememberToken(); // campo adicional para tokens de recordar sesión
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};

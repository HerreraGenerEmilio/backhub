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
        Schema::table('oferta', function (Blueprint $table) {
            $table->string('nombre', 100)->change(); // Limitado a 100 caracteres
            $table->string('descripcion', 255)->change(); // Limitado a 255 caracteres
            $table->longText('detalle')->nullable(); // Texto extenso
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oferta', function (Blueprint $table) {
            $table->string('nombre')->change(); // Restaurar la longitud predeterminada del campo nombre
            $table->string('descripcion')->change(); // Restaurar la longitud predeterminada del campo descripcion
            $table->dropColumn('detalle'); // Eliminar el campo detalle
        });
    }
};

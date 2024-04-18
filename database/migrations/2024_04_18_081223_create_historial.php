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
        Schema::create('historial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oferta'); // Clave foránea a la tabla de ofertas
            $table->unsignedBigInteger('publicador'); // Clave foránea al usuario que publica
            $table->unsignedBigInteger('suscriptor'); // Clave foránea al usuario que se suscribe
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial');
    }
};

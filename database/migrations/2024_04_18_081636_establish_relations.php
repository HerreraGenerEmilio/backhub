<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('oferta', function (Blueprint $table) {
            // Agregar la restricción de clave foránea para la columna 'publicador'
            $table->foreign('publicador')->references('id')->on('users');
            // Agregar la restricción de clave foránea para la columna 'sector'
            $table->foreign('sector')->references('id')->on('sector');
        });

        Schema::table('users', function (Blueprint $table) {
            // Agregar la restricción de clave foránea para la columna 'empresa'
            $table->foreign('empresa')->references('id')->on('empresa');
        });

        Schema::table('empresa', function (Blueprint $table) {
            // Agregar la restricción de clave foránea para la columna 'admin'
            $table->foreign('admin')->references('id')->on('users');
        });

        Schema::table('historial', function (Blueprint $table) {
            // Agregar la restricción de clave foránea para la columna 'oferta'
            $table->foreign('oferta')->references('id')->on('oferta');
            // Agregar la restricción de clave foránea para la columna 'publicador'
            $table->foreign('publicador')->references('id')->on('users');
            // Agregar la restricción de clave foránea para la columna 'suscriptor'
            $table->foreign('suscriptor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('oferta', function (Blueprint $table) {
            // Eliminar la restricción de clave foránea para la columna 'publicador'
            $table->dropForeign(['publicador']);
            // Eliminar la restricción de clave foránea para la columna 'sector'
            $table->dropForeign(['sector']);
        });

        Schema::table('users', function (Blueprint $table) {
            // Eliminar la restricción de clave foránea para la columna 'empresa'
            $table->dropForeign(['empresa']);
        });

        Schema::table('empresa', function (Blueprint $table) {
            // Eliminar la restricción de clave foránea para la columna 'admin'
            $table->dropForeign(['admin']);
        });

        Schema::table('historial', function (Blueprint $table) {
            // Eliminar la restricción de clave foránea para la columna 'oferta'
            $table->dropForeign(['oferta']);
            // Eliminar la restricción de clave foránea para la columna 'publicador'
            $table->dropForeign(['publicador']);
            // Eliminar la restricción de clave foránea para la columna 'suscriptor'
            $table->dropForeign(['suscriptor']);
        });
    }
};

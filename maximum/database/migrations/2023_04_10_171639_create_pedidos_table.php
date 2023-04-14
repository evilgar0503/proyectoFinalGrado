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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha');
            $table->string('cod_seguimiento');
            $table->unsignedBigInteger('id_usuario');
            $table->longText('nota_cliente');
            $table->longText('nota_empresa');
            $table->unsignedBigInteger('id_metodo_pago');
            $table->float('precio_total');
            $table->string('env_nombre');
            $table->string('env_apellidos');
            $table->string('env_dni', 9);
            $table->string('env_ciudad');
            $table->integer('env_cp');
            $table->unsignedBigInteger('id_metodo_envio');
            $table->set('estado', ['pendiente', 'procesado', 'enviado']);
            $table->string('fac_nombre');
            $table->string('fac_apellidos');
            $table->string('fac_dni', 9);
            $table->string('fac_ciudad');
            $table->integer('fac_cp');

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_metodo_pago')->references('id')->on('metodos_pago');
            $table->foreign('id_metodo_envio')->references('id')->on('metodos_envio');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};

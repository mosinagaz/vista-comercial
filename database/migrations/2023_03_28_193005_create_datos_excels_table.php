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
        Schema::create('datos_excel', function (Blueprint $table) {
            $table->id();
            $table->string('cod_wen');
            $table->string('d_wen');
            $table->string('lab');
            $table->string('d_reg');
            $table->string('canal_venta');
            $table->string('cadena_nombre');
            $table->string('cliente');
            $table->string('d_cliente');
            $table->string('articulo');
            $table->string('descripcion_articulo');
            $table->string('area')->default('');
            $table->string('causa')->default('');
            $table->string('observacion')->default('');
            $table->string('ejercicio');
            $table->date('fecha_pedido');
            $table->string('numero_serie');
            $table->integer('numero_pedido');
            $table->string('numero_pedido_cliente');
            $table->float('cantidad_perdida');
            $table->float('importe_neto_lin');
            $table->float('unidades_servidas');
            $table->float('valor_servido');
            $table->float('un_pendiente');
            $table->float('valor_pendiente');
            $table->string('status');
            $table->string('gestor');
            $table->string('tipo_bacorder');
            $table->string('ped_atendido');
            $table->string('categoria');
            $table->date('fecha');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_excels');
    }
};

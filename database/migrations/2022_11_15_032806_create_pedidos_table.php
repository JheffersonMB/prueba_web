<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->float('monto_total');
            $table->string('estadodelpedido',30)->default('pendiente');                                      // pendiente, entregado, cancelado
            

            $table->unsignedBigInteger('id_ubicacion')->nullable()->unique();           //uno a uno  : acepta valores null y debe ser unico
            $table->unsignedBigInteger('id_cliente');                                     //uno a muchos
            $table->unsignedBigInteger('id_empleado')->nullable()->default(null); //uno a muchos
            $table->unsignedBigInteger('id_delivery')->nullable()->default(null); //uno a muchos

           // Relacionando tablas capturando llave primaria de categoria
           $table->foreign('id_ubicacion')->references('id')->on('ubicaciones')->onDelete('cascade')->onUpdate('cascade'); //cascade: eliminao modifica el registro relacionado
           $table->foreign('id_cliente')->references('id')->on('clientes');
           $table->foreign('id_empleado')->references('id')->on('empleados');
           $table->foreign('id_delivery')->references('id')->on('deliverys');
           
           $table->tinyInteger('estado')->default(1);
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
        Schema::dropIfExists('pedidos');
    }
}

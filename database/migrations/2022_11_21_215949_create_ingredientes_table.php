<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_ingredientes');
            $table->string('descripcion_ingredientes');
            $table->integer('stock_ingredientes')->default(0);
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_almacen');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');  
            $table->foreign('id_almacen')->references('id')->on('almacenes');  
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
        Schema::dropIfExists('ingredientes');
    }
}

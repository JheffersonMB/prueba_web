<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverysTable extends Migration
{
  
    public function up()
    {
        Schema::create('deliverys', function (Blueprint $table) {
            $table->id();

            $table->string('nombre_delivery');
            $table->string('apellido_delivery');
            $table->string('telefono_delivery');
            $table->string('nro_licencia');
            $table->string('placa');
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('deliverys');
    }
}

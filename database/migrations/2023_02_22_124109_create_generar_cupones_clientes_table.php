<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenerarCuponesClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generar_cupones_clientes', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("cupon_id");
            $table->longText("valorCodigodeBarras");    
            $table->string("direccionIPPublica");             
            $table->string("direccionIPLocal")->nullable(); 
            $table->string("ciudad")->nullable(); 
            $table->string("region")->nullable();
            $table->string("pais")->nullable(); 
            $table->string("latLong")->nullable(); 
            $table->string("direccionMac")->nullable(); 
            $table->string("correo")->nullable(); 
            $table->string("numCelular")->nullable(); 
            $table->string("tipoDeDispositivo")->nullable(); 
            $table->string("modeloDeDispositivo")->nullable(); 
            $table->string("tipoNavegador")->nullable();             
            $table->string("adicional")->nullable();
            $table->boolean("status")->nullable(); 
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
        Schema::dropIfExists('generar_cupones_clientes');
    }
}

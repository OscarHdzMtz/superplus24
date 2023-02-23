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
            $table->string("tipoNavegador"); 
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
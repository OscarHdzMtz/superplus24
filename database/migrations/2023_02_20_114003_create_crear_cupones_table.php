<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrearCuponesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crear_cupones', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("user_id");
            $table->integer("configuracionCodigoBarras_id")->nullable();
            $table->string("titulo");
            $table->string("subtitulo")->nullable();
            $table->longText("description")->nullable();            
            $table->string("image");
            $table->date("fechaInicio");
            $table->date("fechaFin");            
            $table->integer("contadorCodigoDeBarras"); 
            $table->longText("valorCodigoDeBarras"); 
            $table->integer("inicioDeRangoGenerarCodigoDeBarras")->nullable(); 
            $table->integer("finDeRangoGenerarCodigoDeBarras")->nullable(); 
            $table->integer("orden")->nullable(); 
            $table->boolean('status')->nullable();            
            $table->string("btnCupones")->nullable();
            $table->string("adicional")->nullable();
            $table->string("rutaPagina")->nullable();
            $table->longText("politicaDeUso")->nullable();                        
            $table->string('reactivarGeneracionEn')->nullable();
            $table->longText('mensaje')->nullable();
            $table->string('iconoCupon')->nullable();
            $table->string('tipoDeCupon')->nullable();
            $table->string('tipoDeCodigoAGenerar')->nullable();
            $table->string('nombrePaginaCupon')->nullable();
            $table->boolean('prioridad')->nullable();            
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('crear_cupones');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicidadEmergentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidad_emergentes', function (Blueprint $table) {            
            $table->bigIncrements("id");
            $table->integer("user_id");
            $table->string("titulo");
            $table->string("description")->nullable();
            $table->string("image");
            $table->string("prioridad")->nullable();
            $table->date("fechaInicio");
            $table->date("fechaFin");            
            $table->boolean('status')->nullable();
            $table->boolean('deldia')->nullable();
            $table->string("adicional")->nullable();
            $table->string("paginasAMostrar")->nullable();
            $table->string("textoDelBoton")->nullable();            
            $table->string("paginaARedireccionar")->nullable();            
            $table->integer("vigenciaCookie")->nullable();
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
        Schema::dropIfExists('publicidad_emergentes');
    }
}

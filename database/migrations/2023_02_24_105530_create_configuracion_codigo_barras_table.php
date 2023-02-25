<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionCodigoBarrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracion_codigo_barras', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('DNS_1Do2D');
            $table->string('getBarcode_SVGoHTMLoPNGPATH');
            $table->string('NombreTipoCodigoBarras');
            $table->integer('anchoCodigoDeBarras')->nullable();
            $table->integer('largoCodigoDeBarras')->nullable();
            $table->string('color')->nullable();
            $table->string('rutaImagen')->nullable();
            $table->boolean('mostrarTextoCodigoDebarras')->nullable();
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
        Schema::dropIfExists('configuracion_codigo_barras');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacion_pages', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('label')->nullable();
            $table->string('titulo')->nullable();
            $table->string('numero')->nullable();
            $table->string('subtitulo')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('imgBanner')->nullable();
            $table->string('icono')->nullable();
            $table->string('imghover')->nullable();            
            $table->integer('orden')->nullable();                       
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('facturacion_pages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexsettings', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('label');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('description');
            $table->string('redireccion');
            $table->string('titulobtn')->nullable();
            $table->string('icono')->nullable();
            $table->string('style')->nullable();
            $table->integer('orden')->nullable();                       
            $table->boolean('modal');
            $table->boolean('status')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('indexsettings');
    }
}

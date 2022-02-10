<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleosettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleosettings', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('label');
            $table->string('titulo');
            $table->string('numero')->nullable();
            $table->string('subtitulo')->nullable();
            $table->longText('description');
            $table->string('image')->nullable(); 
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
        Schema::dropIfExists('empleosettings');
    }
}

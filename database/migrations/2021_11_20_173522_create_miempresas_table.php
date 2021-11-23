<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miempresas', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('titulo');
            $table->longText('description');
            $table->string('image'); 
            $table->string('imghover')->nullable();            
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
        Schema::dropIfExists('miempresas');
    }
}

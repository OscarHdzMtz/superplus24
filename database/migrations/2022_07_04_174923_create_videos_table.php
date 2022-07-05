<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('label')->nullable();
            $table->string('titulo')->nullable();
            $table->string('image')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('video')->nullable(); 
            $table->date("fechaInicio")->nullable();
            $table->date("fechaFin")->nullable(); 
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
        Schema::dropIfExists('videos');
    }
}

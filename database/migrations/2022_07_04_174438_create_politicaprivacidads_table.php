<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticaprivacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('politicaprivacidads', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('titulo')->nullable();
            $table->string('label')->nullable();            
            $table->string('subititulo')->nullable();            
            $table->text('texto');
            $table->string('image')->nullable(); 
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
        Schema::dropIfExists('politicaprivacidads');
    }
}

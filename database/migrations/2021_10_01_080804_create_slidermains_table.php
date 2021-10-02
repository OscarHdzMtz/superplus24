<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidermainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slidermains', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image');
            $table->string('fechaInicio');
            $table->string('fechaFin');            
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
        Schema::dropIfExists('slidermains');
    }
}

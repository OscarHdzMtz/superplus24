<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePublicofertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicoferts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("user_id");
            $table->string("titulo");
            $table->string("texto")->nullable();
            $table->string("image");
            $table->string("fechaInicio");
            $table->string("fechaFin");
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
        Schema::dropIfExists('publicoferts');
    }
}

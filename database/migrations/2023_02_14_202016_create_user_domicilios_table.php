<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilios', function (Blueprint $table) {
            $table->id();
            $table->string('domicilio');
            $table->string('numero_exterior'); //Considerando que puede ser por ejemplo 34A y 34B
            $table->string('colonia');
            $table->string('cp');
            $table->string('ciudad');
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
        Schema::dropIfExists('user_domicilios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassConcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Classconc', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->string('conc1');
            $table->string('conc2');
            $table->string('conc3');
            $table->string('conc4');




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
        Schema::dropIfExists('Classconc');

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassObjs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Classobj', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->string('obj1');
            $table->string('obj2');
            $table->string('obj3');
            $table->string('obj4');




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
        Schema::dropIfExists('Classobj');

    }
}

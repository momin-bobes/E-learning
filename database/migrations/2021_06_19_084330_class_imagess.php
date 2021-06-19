<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassImagess extends Migration
{/**
 * Run the migrations.
 *
 * @return void
 */
    public function up()
    {
        Schema::create('Classimages', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');



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
        Schema::dropIfExists('Classimages');

    }
}

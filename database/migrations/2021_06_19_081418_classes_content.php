<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassesContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Classes_content', function (Blueprint $table) {
            $table->id();
            $table->string('classname');
            $table->string('classnum');
            $table->string('classtitle');
            $table->string('classsubtitle');
            $table->string('images');
            $table->string('video');
            $table->string('paper');
            $table->string('conclude');
            $table->string('session');
            $table->string('learn');
            $table->string('exam');








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
        Schema::dropIfExists('Classes_content');

    }
}

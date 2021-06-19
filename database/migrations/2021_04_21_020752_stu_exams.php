<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StuExams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_7s', function (Blueprint $table) {
            $table->id();
            $table->string('category');

            $table->string('Title');

            $table->string('question');
            $table->string('choice_1');
            $table->string('choice_2');
            $table->string('choice_3');
            $table->string('right_answer');


            $user = \Auth::user();

//->default('student');
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
        Schema::dropIfExists('exam_7s');

    }
}

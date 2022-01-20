<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id');
            $table->string('name');
            $table->text('detail');
            $table->time('time_limit');
            $table->enum('limit_type',['Detik','Menit']);
            $table->time('show_timeout');
            $table->integer('passing_grade');
            $table->enum('question_order',['Random','Berurutan']);
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
        Schema::dropIfExists('lesson_quizzes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->string('name');
            $table->foreignId('category_id');
            $table->text('description');
            $table->integer('duration_hour');
            $table->integer('duration_minute');
            $table->integer('duration_second');
            $table->enum('level', ['All', 'Beginner', 'Intermediate', 'Expert']);
            $table->integer('price');
            $table->text('benefits');
            $table->text('requirements');
            $table->text('audients');
            $table->foreignId('user_id');
            $table->enum('status', ['Active', 'NotActive'])->default('Active');

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
        Schema::dropIfExists('courses');
    }
}

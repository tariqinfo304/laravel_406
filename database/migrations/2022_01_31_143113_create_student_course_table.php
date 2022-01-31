<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("course_id");
            $table->unsignedBigInteger("student_id");
            $table->timestamps();


            $table->foreign("course_id")->references("id")->on("course");
            $table->foreign("student_id")->references("id")->on("student");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_course');
    }
}

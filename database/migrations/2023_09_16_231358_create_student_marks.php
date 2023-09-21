<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('teacher_id');
            $table->string('class');
            $table->string('student_name');
            $table->integer('english_marks');
            $table->integer('hindi_marks');
            $table->integer('telugu_marks');
            $table->integer('maths_marks');
            $table->integer('science_marks');
            $table->integer('biology_marks');
            $table->integer('social_marks');
            $table->integer('computer_marks');
            $table->integer('total_marks');
            $table->timestamps();
        
            $table->foreign('student_id')->references('std_id')->on('students');
            $table->foreign('teacher_id')->references('staff_id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_marks');
    }
};

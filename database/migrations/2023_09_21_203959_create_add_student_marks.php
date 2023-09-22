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
        Schema::create('add_student_marks', function (Blueprint $table) {
                $table->id();
                $table->string('class');
                $table->unsignedBigInteger('std_id');
                $table->string('std_name');
                $table->integer('eng_marks');
                $table->integer('tel_marks');
                $table->integer('maths_marks');
                $table->integer('science_marks');
                $table->integer('biology_marks');
                $table->integer('social_marks');
                $table->integer('computer_marks');
                $table->integer('total_marks');
                $table->decimal('percentage', 5, 2);
                $table->timestamps();
                $table->foreign('std_id')->references('std_id')->on('students');                  
                                     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_student_marks');
    }
};

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
        Schema::create('students', function (Blueprint $table) {
            $table->id('std_id');
            $table->date('registration_date');
            $table->string('registration_number')->unique();
            $table->string('std_first_name');
            $table->string('std_last_name');
            $table->string('std_gender');
            $table->date('std_dob');
            $table->string('std_father_name');
            $table->string('std_mother_name');
            $table->string('std_phone_no');
            $table->string('std_address');
            $table->string('std_email')->unique();
            $table->string('std_nationality');
            $table->string('std_aadhar_no')->unique();
            $table->string('class');
            $table->string('religion');
            $table->string('student_image_path');
            $table->string('password');
            $table->string('std_status')->default('Active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

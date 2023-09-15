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
        Schema::create('staff', function (Blueprint $table) {
                $table->id();
                $table->string('staff_id')->unique();
                $table->date('registration_date');
                $table->string('registration_number')->unique();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('gender');
                $table->date('dob');
                $table->string('phone_no');
                $table->string('address');
                $table->string('email')->unique();
                $table->string('nationality');
                $table->string('alternate_phone_no');
                $table->string('aadhar_no')->unique();
                $table->string('staff_type');
                $table->string('profession');
                $table->string('work_experience');
                $table->string('qualification');
                $table->string('religion');
                $table->string('password');
                $table->string('image_path');
                $table->rememberToken();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staffs');
    }
};

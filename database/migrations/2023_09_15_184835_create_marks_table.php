<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('std_id');
            $table->string('subject');
            $table->integer('marks');
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->timestamps();
    
            $table->foreign('std_id')->references('std_id')->on('students');
            $table->foreign('staff_id')->references('staff_id')->on('staff');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};

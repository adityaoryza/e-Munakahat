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
        Schema::create('marriage_preparation_courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CourseID')->unique();
            $table->date('DateCourse')->nullable(false);
            $table->timestamp('TimeCourse')->nullable(false);
            $table->string('VenueCourse', 100)->nullable(false);
            $table->string('AttendanceStatus', 100)->nullable(false);
            $table->string('PaymentProof', 100)->nullable(false);
            $table->string('PaymentRef', 100)->unique()->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_preparation_courses');
        Schema::dropIfExists('course_certs');
    }
};

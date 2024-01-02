<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id('StaffID');
            $table->string('Name', 100);
            $table->string('Gender', 10);
            $table->string('Contact_Number')->unique();
            $table->string('Email', 100)->unique();
            $table->string('Address', 300);
            $table->string('Position', 100);
            $table->timestamps();
            // $table->primary('StaffID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
}

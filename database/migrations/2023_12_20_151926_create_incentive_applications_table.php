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
        Schema::create('incentive_applications', function (Blueprint $table) {
            $table->id();
            $table->string('husbandName', 255);
            $table->string('husbandIC', 50);
            $table->string('workplace', 255);
            $table->string('jobPosition', 80);
            $table->string('bankCategory', 255);
            $table->integer('accountNumber');
            $table->string('bankStatement', 255);
            $table->string('payslip', 255);
            $table->timestamps();
        });

        // Adding foreign key constraint
        Schema::table('incentive_applications', function (Blueprint $table) {
            $table->foreign('applicantID')->references('id')->on('applicants');
            $table->foreign('marriageID')->references('id')->on('marriages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incentive_applications');
    }
};

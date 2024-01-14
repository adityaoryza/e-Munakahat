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
            //$table->id();
            $table->string('IncentiveID', 5)->unique(); // Making IncentiveID unique
            $table->string('applicantID', 50);
            $table->string('marriageID')->nullable();
            $table->string('incentive_status', 10);
            $table->date('incentive_apply_date')->default(now()); // Setting default value to today's date
            $table->string('groom_job_position', 80);
            $table->binary('groom_payslip');
            $table->binary('groom_bank_statement');
            $table->integer('groom_acc_number');
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

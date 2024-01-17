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
            $table->string('husbandName');
            $table->string('husbandIC');
            $table->string('workplace');
            $table->string('jobPosition');
            $table->string('bankCategory');
            $table->string('accountNumber');
            $table->binary('bankStatement');
            $table->binary('payslip');
            $table->timestamps();
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

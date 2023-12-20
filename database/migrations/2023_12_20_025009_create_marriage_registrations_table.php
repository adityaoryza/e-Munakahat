<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageRegistrationsTable extends Migration
{
/**
* Run the migrations.
*/
public function up(): void
{
Schema::create('marriage_registrations', function (Blueprint $table) {
$table->id('RegistrationID');
$table->foreignId('id')->constrained('users', 'id')->onDelete('cascade');
$table->string('RegistrationType', 100)->default('Permitted');
$table->string('RegistrationStatus', 100)->default('Pending');
$table->date('RegistrationDate');
$table->timestamps();
});
}

/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('marriage_registrations');
}
}
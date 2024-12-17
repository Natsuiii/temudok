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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users', 'id')->onDelete('cascade');
            $table->bigInteger('amount');
            $table->boolean('payment_status');
            $table->timestamps();
        });

        Schema::create('appointment_status', function (Blueprint $table) {
            $table->id();
            $table->string('status_name');
            $table->timestamps();
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('payment_id')->constrained('payments', 'id')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('appointment_status', 'id')->onDelete('cascade');
            $table->string('name');
            $table->string('email_to_contact');
            $table->text('reason');
            $table->date('date_of_birth');
            $table->dateTime('appointment_date');
            $table->dateTime('appointment_reschedule_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('appointment_status');
        Schema::dropIfExists('appointments');
    }
};

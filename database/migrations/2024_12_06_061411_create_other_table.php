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
            $table->string('payment_status');
            $table->string('snap_token')->nullable();
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
            $table->foreignId('status_id')->constrained('appointment_status', 'id')->onDelete('cascade');
            $table->string('name');
            $table->string('email_to_contact');
            $table->text('reason');
            $table->integer('age');
            $table->string('consultation_duration');
            $table->dateTime('appointment_date');
            $table->dateTime('appointment_reschedule_date')->nullable();
            $table->bigInteger('amount');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });

        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('meeting_id');
            $table->foreignId('appointment_id')->constrained('appointments', 'id')->onDelete('cascade');
            $table->text('join_url');
            $table->text('start_url');
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

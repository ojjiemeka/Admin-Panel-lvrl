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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('celebrity_name');
            $table->date('event_date');
            $table->string('approx_budget');
            $table->string('event_type');
            $table->string('location');
            $table->string('additional_info');
            $table->string('full_name');
            $table->string('job_title');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->string('street_address');
            $table->string('zip_code');
            $table->string('country');
            $table->string('nearest_airport');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('fanCardSubscription', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('job_title');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->string('street_address');
            $table->string('zip_code');
            $table->string('country');
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

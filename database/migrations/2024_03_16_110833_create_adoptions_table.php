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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('pet_id')->references('id')->on('pets');

            // Other than default user account owner
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('house_number');
            $table->string('street');
            $table->string('city');
            $table->integer('status')->default(0);
            $table->string('user_image')->nullable();
            $table->timestamp('adoption_stamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};

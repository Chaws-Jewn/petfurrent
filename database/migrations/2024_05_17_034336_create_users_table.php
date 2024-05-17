<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('lname');
            $table->string('fname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(0);
            $table->string('phone_number')->nullable();
            $table->enum('gender', ['male', 'female', 'others'])->nullable();
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

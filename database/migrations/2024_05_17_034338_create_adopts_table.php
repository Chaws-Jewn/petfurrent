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
        Schema::create('adopts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dogs_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('phone_number');
            $table->string('email_address');
            $table->string('house_number');
            $table->string('street');
            $table->string('city');
            $table->string('adopt_status')->default('Pending');
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dogs_id')->references('id')->on('dogs');
        });
    }    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopts');
    }
};

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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('name');
            $table->unsignedBigInteger('email');
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->date('dob')->nullable();
            $table->timestamps();

            // Define foreign key relationship with the users table
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('name')->references('id')->on('users');
            $table->foreign('email')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
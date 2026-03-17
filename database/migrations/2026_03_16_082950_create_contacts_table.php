<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('title', 16)->nullable();
            $table->string('given_name', 64);
            $table->string('family_name', 64)->nullable();
            $table->string('nick_name', 32)->nullable();
            $table->string('email', 360)->nullable();
            // TODO: Use an update migration to add user contact belongs to

            $table->timestamps();

            // TODO: Use an update migration to add indexes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

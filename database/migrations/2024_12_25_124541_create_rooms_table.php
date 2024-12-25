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
        Schema::create('rooms', function (Blueprint $table) {
            $table->uuid('room_unique_id')->primary();
            $table->foreignUuid('boarding_house_uid')->constrained('boarding_houses', 'boarding_house_uid');
            $table->string('room_name');
            $table->integer('square_feet');
            $table->integer('price_per_month');
            $table->integer('is_available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

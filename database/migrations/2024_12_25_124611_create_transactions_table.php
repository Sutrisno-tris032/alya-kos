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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('transaction_unique_id')->primary();
            $table->integer('code');
            $table->foreignUuid('boarding_house_uid')->constrained('boarding_houses', 'boarding_house_uid');
            $table->foreignUuid('room_unique_id')->constrained('rooms', 'room_unique_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->enum('payment_method', ['down_payment', 'full_payment'])->nullable();
            $table->string('payment_status')->nullable();
            $table->string('start_date');
            $table->string('duration');
            $table->string('total_amount')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('snap_token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

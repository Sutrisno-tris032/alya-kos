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
        Schema::create('boarding_houses', function (Blueprint $table) {
            $table->uuid('boarding_house_uid')->primary();
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->foreignId('city_id')->constrained('cities', 'id');
            $table->foreignId('category_id')->constrained('categories','id');
            $table->text('description');
            $table->integer('price');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding_houses');
    }
};

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
        Schema::create('card_shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->nullable();
            $table->string('slug', 250)->nullable();
            $table->string('location', 250)->nullable();
            $table->string('duration', 250)->nullable();
            $table->text('description')->nullable();
            $table->string('carrier', 250)->nullable();
            $table->double('price')->nullable();
            $table->string('status', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_shipping_methods');
    }
};

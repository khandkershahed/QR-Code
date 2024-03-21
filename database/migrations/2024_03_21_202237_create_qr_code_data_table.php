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
        Schema::create('qr_code_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code_id')->nullable()->constrained('qr_codes')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('link')->nullable();
            $table->string('file')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code_data');
    }
};

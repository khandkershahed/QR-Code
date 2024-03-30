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
        Schema::create('nfc_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->nullable()->constrained('nfc_cards')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('pronouns')->nullable();
            $table->string('company')->nullable();
            $table->text('summary')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('logo_Size')->nullable();
            $table->text('address')->nullable();
            $table->string('location_latitude')->nullable();
            $table->string('location_longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfc_data');
    }
};

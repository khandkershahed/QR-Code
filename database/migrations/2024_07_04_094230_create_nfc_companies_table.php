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
        Schema::create('nfc_companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->nullable()->constrained('nfc_cards')->onDelete('cascade');

            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_logo')->nullable();
            $table->text('company_website')->nullable();
            $table->mediumText('company_description')->nullable();
            $table->string('company_address_line_one')->nullable();
            $table->string('company_address_line_two')->nullable();
            $table->text('company_facebook')->nullable();
            $table->text('company_twitter')->nullable();
            $table->text('company_linkedin')->nullable();
            $table->text('company_youtube')->nullable();
            $table->text('company_instagram')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfc_companies');
    }
};

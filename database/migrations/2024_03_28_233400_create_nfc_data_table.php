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
            $table->string('banner_image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('phone_work')->nullable();
            $table->string('phone_personal')->nullable();
            $table->string('email_work')->nullable();
            $table->string('email_personal')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('google_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('google_plus_url')->nullable();
            $table->string('gmail_url')->nullable();
            $table->string('apple_url')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('bio_title')->nullable();
            $table->text('bio_description')->nullable();
            $table->string('service_section_title')->nullable();
            $table->text('service_section_description')->nullable();
            $table->string('service_one_title')->nullable();
            $table->text('service_one_description')->nullable();
            $table->string('service_one_image')->nullable();
            $table->string('service_two_title')->nullable();
            $table->text('service_two_description')->nullable();
            $table->string('service_two_image')->nullable();
            $table->string('service_three_title')->nullable();
            $table->text('service_three_description')->nullable();
            $table->string('service_three_image')->nullable();
            $table->string('company_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_address_line_one')->nullable();
            $table->string('company_address_line_two')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_about_title')->nullable();
            $table->text('company_about_description')->nullable();
            $table->string('qr_code')->nullable();
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

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
            $table->string('email_personal')->nullable();
            $table->string('email_work')->nullable();
            $table->string('phone_personal')->nullable();
            $table->string('phone_work')->nullable();
            $table->string('fax')->nullable();
            $table->string('location')->nullable();
            $table->text('location_url')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->string('default_language')->nullable();
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();

            $table->string('website_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('whatsapp_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('reddit_url')->nullable();
            $table->string('tumblr_url')->nullable();
            $table->string('tiktok_url')->nullable();

            $table->string('start_time_monday')->nullable();
            $table->string('monday')->nullable();
            $table->string('end_time_monday')->nullable();
            $table->string('start_time_tuesday')->nullable();
            $table->string('tuesday')->nullable();
            $table->string('end_time_tuesday')->nullable();
            $table->string('start_time_wednesday')->nullable();
            $table->string('wednesday')->nullable();
            $table->string('end_time_wednesday')->nullable();
            $table->string('start_time_thursday')->nullable();
            $table->string('thursday')->nullable();
            $table->string('end_time_thursday')->nullable();
            $table->string('start_time_friday')->nullable();
            $table->string('friday')->nullable();
            $table->string('end_time_friday')->nullable();
            $table->string('start_time_saturday')->nullable();
            $table->string('saturday')->nullable();
            $table->string('end_time_saturday')->nullable();
            $table->string('start_time_sunday')->nullable();
            $table->string('sunday')->nullable();
            $table->string('end_time_sunday')->nullable();

            $table->longText('privacy_policy')->nullable();
            $table->longText('terms_condition')->nullable();
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

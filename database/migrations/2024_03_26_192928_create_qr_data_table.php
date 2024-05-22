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
        Schema::create('qr_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('code_id')->nullable()->constrained('qrs')->onDelete('cascade');
            $table->text('qr_data_website_url')->nullable();
            $table->string('qr_data_pdf')->nullable();
            $table->string('qr_data_image')->nullable();
            $table->text('qr_data_image_link')->nullable();
            $table->string('qr_data_sms_number')->nullable();
            $table->text('qr_data_sms_message')->nullable();
            $table->string('qr_data_email_id')->nullable();
            $table->string('qr_data_email_subject')->nullable();
            $table->longText('qr_data_email_body')->nullable();
            $table->text('qr_app_android')->nullable();
            $table->text('qr_data_app_iphone')->nullable();
            $table->text('qr_data_app_ipad')->nullable();
            $table->string('qr_data_call_number')->nullable();
            $table->string('qr_data_location')->nullable();
            $table->string('qr_data_location_latitude')->nullable();
            $table->string('qr_data_location_longitude')->nullable();
            $table->string('qr_data_coupon_header')->nullable();
            $table->text('qr_data_coupon_message')->nullable();
            $table->text('qr_data_coupon_description_body')->nullable();
            $table->string('qr_data_coupon_company', 150)->nullable();
            $table->string('qr_data_coupon_code', 120)->nullable();
            $table->text('qr_data_coupon_logo')->nullable();
            $table->date('qr_data_coupon_expire_date')->nullable();
            $table->string('qr_data_coupon_description_header')->nullable();
            $table->text('qr_data_coupon_website')->nullable();
            $table->string('qr_data_coupon_background_color', 120)->nullable();
            $table->string('qr_data_coupon_title_color', 120)->nullable();
            $table->string('qr_data_coupon_button_bg_color', 120)->nullable();
            $table->string('qr_data_coupon_button_title_color', 120)->nullable();
            $table->text('qr_data_coupon_policy')->nullable();
            $table->text('qr_data_audio_file')->nullable();
            $table->text('qr_data_audio_link')->nullable();
            $table->string('qr_data_social_logo', 150)->nullable();
            $table->text('qr_data_social_header')->nullable();
            $table->text('qr_data_social_title')->nullable();
            $table->text('qr_data_social_message')->nullable();
            $table->string('qr_data_social_background_image', 150)->nullable();
            $table->text('qr_data_social_facebook')->nullable();
            $table->text('qr_data_social_instagram')->nullable();
            $table->text('qr_data_social_linkedin')->nullable();
            $table->text('qr_data_social_twitter')->nullable();
            $table->text('qr_data_social_youtube')->nullable();
            $table->text('qr_data_social_pinterest')->nullable();
            $table->text('qr_data_social_website')->nullable();
            $table->text('qr_data_social_whatsapp')->nullable();
            $table->text('qr_data_social_snapchat')->nullable();
            $table->text('qr_data_social_tiktok')->nullable();
            $table->string('qr_data_facebook_page_logo', 192)->nullable();
            $table->text('qr_data_facebook_page_header')->nullable();
            $table->text('qr_data_facebook_page_title')->nullable();
            $table->string('qr_data_facebook_page_background_image', 192)->nullable();
            $table->text('qr_data_facebook_page_facebook')->nullable();
            $table->string('qr_data_business_page_logo', 192)->nullable();
            $table->string('qr_data_business_page_business_name', 150)->nullable();
            $table->text('qr_data_business_page_header')->nullable();
            $table->string('qr_data_business_page_start_time_monday')->nullable();
            $table->string('qr_data_business_page_end_time_monday')->nullable();
            $table->string('qr_data_business_page_start_time_tuesday')->nullable();
            $table->string('qr_data_business_page_end_time_tuesday')->nullable();
            $table->string('qr_data_business_page_start_time_wednesday')->nullable();
            $table->string('qr_data_business_page_end_time_wednesday')->nullable();
            $table->string('qr_data_business_page_start_time_thursday')->nullable();
            $table->string('qr_data_business_page_end_time_thursday')->nullable();
            $table->string('qr_data_business_page_start_time_friday')->nullable();
            $table->string('qr_data_business_page_end_time_friday')->nullable();
            $table->string('qr_data_business_page_start_time_saturday')->nullable();
            $table->string('qr_data_business_page_end_time_saturday')->nullable();
            $table->string('qr_data_business_page_start_time_sunday')->nullable();
            $table->string('qr_data_business_page_end_time_sunday')->nullable();
            $table->text('qr_data_business_page_website')->nullable();
            $table->string('qr_data_business_page_business_email', 192)->nullable();
            $table->string('qr_data_business_page_business_phone', 120)->nullable();
            $table->text('qr_data_business_page_business_location')->nullable();
            $table->string('qr_data_business_page_business_phone')->nullable();
            $table->string('qr_data_business_page_business_phone')->nullable();
            $table->string('qr_data_business_page_business_phone')->nullable();
            $table->string('qr_data_business_page_business_phone')->nullable();
            $table->string('qr_data_business_page_business_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_data');
    }
};

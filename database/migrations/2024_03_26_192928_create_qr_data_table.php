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
            $table->string('qr_data_coupon_code')->nullable();
            $table->date('qr_data_coupon_expire_date')->nullable();
            $table->text('qr_data_coupon_header')->nullable();
            $table->text('qr_data_coupon_message')->nullable();
            $table->mediumText('qr_data_coupon_description_header')->nullable();
            $table->longText('qr_data_coupon_description_body')->nullable();
            $table->text('qr_data_coupon_website')->nullable();
            $table->string('qr_data_coupon_company')->nullable();
            $table->string('qr_data_coupon_background_color')->nullable();
            $table->string('qr_data_coupon_title_color')->nullable();
            $table->string('qr_data_coupon_button_bg_color')->nullable();
            $table->string('qr_data_coupon_button_title_color')->nullable();
            $table->mediumText('qr_data_coupon_policy')->nullable();
            $table->string('qr_data_coupon_logo')->nullable();
            $table->text('qr_data_audio_file')->nullable();
            $table->text('qr_data_audio_link')->nullable();
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

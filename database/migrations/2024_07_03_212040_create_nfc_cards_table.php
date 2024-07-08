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
        Schema::create('nfc_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('reseller_id')->nullable()->constrained('resellers')->onDelete('cascade');
            $table->string('code')->nullable();
            $table->string('nfc_type')->nullable();

            $table->string('url_alias')->unique()->nullable();
            $table->string('vcard_name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('profile_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('designation')->nullable();
            $table->text('bio_description')->nullable();

            $table->string('nfc_template')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('title_color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('button_bg_color')->nullable();
            $table->string('button_title_color')->nullable();
            $table->string('frame_color')->nullable();
            $table->string('font_family')->nullable();
            $table->string('font_size')->nullable();
            $table->string('nfc_qr')->nullable();
            $table->string('nfc_url')->nullable();
            $table->integer('scan_count')->nullable();

            $table->boolean('general_info')->default(1)->nullable();
            $table->boolean('business_hours')->default(1)->nullable();
            $table->boolean('companies')->default(1)->nullable();
            $table->boolean('services')->default(1)->nullable();
            $table->boolean('products')->default(1)->nullable();
            $table->boolean('galleries')->default(1)->nullable();
            $table->boolean('testimonials')->default(1)->nullable();
            $table->boolean('social_links')->default(1)->nullable();
            $table->boolean('inquiry_form')->default(1)->nullable();
            $table->boolean('appointments')->default(1)->nullable();
            $table->boolean('map')->default(1)->nullable();
            $table->boolean('banner')->default(1)->nullable();
            $table->boolean('news_latter_popup')->default(1)->nullable();
            $table->boolean('social_link')->default(1)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfc_cards');
    }
};

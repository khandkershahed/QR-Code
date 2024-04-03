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
        Schema::create('dynamic_csses', function (Blueprint $table) {
            $table->id();
            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('secondary_bg_color')->nullable();
            $table->string('secondary_deep_color')->nullable();
            $table->string('btn_color')->nullable();
            $table->string('main_bg_color')->nullable();
            $table->string('paragraph_color')->nullable();
            $table->string('secondary_paragraph_color')->nullable();
            $table->string('heading_color')->nullable();
            $table->string('white')->nullable();
            $table->string('black')->nullable();
            $table->string('secoandaryborder_color')->nullable();
            $table->string('border_color')->nullable();
            $table->string('divider_color')->nullable();
            $table->string('toggle_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('para_color')->nullable();
            $table->string('custom_shadow')->nullable();
            $table->string('primary_font')->nullable();
            $table->string('number_font')->nullable();
            $table->string('section_title_font_size')->nullable();
            $table->string('header_font_size')->nullable();
            $table->string('content_title_font_size')->nullable();
            $table->string('paragraph_font_size')->nullable();
            $table->string('badge_font_size')->nullable();
            $table->text('primary_font_url')->nullable();
            $table->text('number_font_url')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_csses');
    }
};

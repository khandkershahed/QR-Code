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
